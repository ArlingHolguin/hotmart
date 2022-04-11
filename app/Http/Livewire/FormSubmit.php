<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Form;
// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
Use App\Mail\ContactResponseMailable;

class FormSubmit extends Component
{

    public $email;
    public $name;

    protected $rules = [
        'name' => 'required|min:3|max:50',
        'email' => 'required|unique:forms|regex:/^\w+([\.\+-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',
    ];


    public function render()
    {
        return view('livewire.form-submit');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    

    public function store(){
        $validatedData = $this->validate();

        
       

        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip")); //$user_ip 201.244.42.38
        $city = $geo["geoplugin_city"];
        $country = $geo["geoplugin_countryName"];
        $radio = $geo["geoplugin_locationAccuracyRadius"].' Kilometros Aprox.';
        $ip = $geo["geoplugin_request"];

        $contact =  Form::create([
            'name' => $this->name,
            'email' => $this->email,
            'city' => $city,
            'country' => $country,
            'radio' => $radio,
            'ip' => $ip
        ]);

        

        $correo = new ContactanosMailable($contact);// $contact envia al contructor para poder usarlo en la vista
        Mail::to('arlingholguin@gmail.com')->queue($correo); //cambiar correo al que van a llegar los cobtactos env('MAIL_FROM_ADDRESS')

        //Envio respuesta al cliente registrado
        $contactResponse = new Form;
        $contactResponse->name = $this->name;
        $contactResponse->email = $this->email;
        $contactResponse->subject = "Descarga Ebook";
        $contactResponse->message = "Gracias por depositar su confianza en nosotros, descarga el ebook en este link, https://link.com";
        $cliente =  $this->email;  //reolecto datos del correo del cliente
        $nombre =  $this->name;

        $correoCliente = new ContactResponseMailable($validatedData );
        // return $request->all();
        Mail::to("$cliente")->queue($correoCliente);

        $this->reset();

         return redirect()->route('form.gracias')->with('info', $nombre. ', <strong>😍 Tu eBook está en tu 📩 bandeja de entrada o spam, ve a</strong>  '. $cliente. '⤵');

        
    }
}
