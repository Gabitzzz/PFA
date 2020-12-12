
    
<div class="contact-container">
    <div class="row">
        <div class="col-md-4 offset-md-2">
            <div class="contact-box">
                <div class="right">
                    <h2>
                        Contacteaza-ma!
                    </h2>
                    
                    @if (Session::has('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                        </div>
                    @endif

                    <form method="POST" 
                        enctype="multipart/form-data"
                        action="{{route('contact.send')}}">
                    @csrf
                    
                    <input type="text" name="name" class="field" placeholder="Nume" required />
                    <input type="text" name="email" class="field" placeholder="Email" required />
                    <textarea name="msg" class="field" placeholder="Mesaj" required></textarea>
                    <button type="submit" class="btn">Trimite!</button>
                </div>        
            </div>    
        </div> 
        
        <div class="col-md-4">
            <h1 style="color:black;"> Program</h1>
        </div>
    </div>        
</div>



    