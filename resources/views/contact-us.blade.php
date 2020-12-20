
    
<div class="contact-container">
    <div class="row">
        <div class="col-md-6 col-xl-4 offset-xl-2">
            <div class="contact-box mt-4">
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

       
        
        

        <div class="col-md-6 col-xl-3">
            <img src="{{ asset('css/contact2.jpg')}}" alt="" class="img-fluid">

                <div class="phone pb-4">
                    <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyLjAyMSA1MTIuMDIxIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMi4wMjEgNTEyLjAyMSIgd2lkdGg9IjUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Zz48cGF0aCBkPSJtMzY3Ljk4OCA1MTIuMDIxYy0xNi41MjggMC0zMi45MTYtMi45MjItNDguOTQxLTguNzQ0LTcwLjU5OC0yNS42NDYtMTM2LjEyOC02Ny40MTYtMTg5LjUwOC0xMjAuNzk1cy05NS4xNS0xMTguOTEtMTIwLjc5NS0xODkuNTA4Yy04LjI0MS0yMi42ODgtMTAuNjczLTQ2LjEwOC03LjIyNi02OS42MTIgMy4yMjktMjIuMDE2IDExLjc1Ny00My4zODkgMjQuNjYzLTYxLjgwOSAxMi45NjMtMTguNTAxIDMwLjI0NS0zMy44ODkgNDkuOTc3LTQ0LjUgMjEuMDQyLTExLjMxNSA0NC4wMDktMTcuMDUzIDY4LjI2NS0xNy4wNTMgNy41NDQgMCAxNC4wNjQgNS4yNzEgMTUuNjQ1IDEyLjY0N2wyNS4xMTQgMTE3LjE5OWMxLjEzNyA1LjMwNy0uNDk0IDEwLjgyOS00LjMzMSAxNC42NjdsLTQyLjkxMyA0Mi45MTJjNDAuNDgyIDgwLjQ4NiAxMDYuMTcgMTQ2LjE3NCAxODYuNjU2IDE4Ni42NTZsNDIuOTEyLTQyLjkxM2MzLjgzOC0zLjgzNyA5LjM2MS01LjQ2NiAxNC42NjctNC4zMzFsMTE3LjE5OSAyNS4xMTRjNy4zNzcgMS41ODEgMTIuNjQ3IDguMTAxIDEyLjY0NyAxNS42NDUgMCAyNC4yNTYtNS43MzggNDcuMjI0LTE3LjA1NCA2OC4yNjYtMTAuNjExIDE5LjczMi0yNS45OTkgMzcuMDE0LTQ0LjUgNDkuOTc3LTE4LjQxOSAxMi45MDYtMzkuNzkyIDIxLjQzNC02MS44MDkgMjQuNjYzLTYuODk5IDEuMDEzLTEzLjc5NyAxLjUxOC0yMC42NjggMS41MTl6bS0yMzYuMzQ5LTQ3OS4zMjFjLTMxLjk5NSAzLjUzMi02MC4zOTMgMjAuMzAyLTc5LjI1MSA0Ny4yMTctMjEuMjA2IDMwLjI2NS0yNi4xNTEgNjcuNDktMTMuNTY3IDEwMi4xMzIgNDkuMzA0IDEzNS43MjYgMTU1LjQyNSAyNDEuODQ3IDI5MS4xNTEgMjkxLjE1MSAzNC42NDEgMTIuNTg0IDcxLjg2NiA3LjY0IDEwMi4xMzItMTMuNTY3IDI2LjkxNS0xOC44NTggNDMuNjg1LTQ3LjI1NiA0Ny4yMTctNzkuMjUxbC05NS4zNDEtMjAuNDMtNDQuODE2IDQ0LjgxNmMtNC43NjkgNC43NjktMTIuMDE1IDYuMDM2LTE4LjExNyAzLjE2OC05NS4xOS00NC43Mi0xNzIuMjQyLTEyMS43NzItMjE2Ljk2Mi0yMTYuOTYyLTIuODY3LTYuMTAzLTEuNjAxLTEzLjM0OSAzLjE2OC0xOC4xMTdsNDQuODE2LTQ0LjgxNnoiLz48L2c+PC9zdmc+" style="width: 10%;" />
                    &nbsp;
                    <a href="tel:+40773800815">0773 800 815</a>
                </div>
    
                <div class="email">
                    {{-- <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyLjAyMSA1MTIuMDIxIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMi4wMjEgNTEyLjAyMSIgd2lkdGg9IjUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Zz48cGF0aCBkPSJtMzY3Ljk4OCA1MTIuMDIxYy0xNi41MjggMC0zMi45MTYtMi45MjItNDguOTQxLTguNzQ0LTcwLjU5OC0yNS42NDYtMTM2LjEyOC02Ny40MTYtMTg5LjUwOC0xMjAuNzk1cy05NS4xNS0xMTguOTEtMTIwLjc5NS0xODkuNTA4Yy04LjI0MS0yMi42ODgtMTAuNjczLTQ2LjEwOC03LjIyNi02OS42MTIgMy4yMjktMjIuMDE2IDExLjc1Ny00My4zODkgMjQuNjYzLTYxLjgwOSAxMi45NjMtMTguNTAxIDMwLjI0NS0zMy44ODkgNDkuOTc3LTQ0LjUgMjEuMDQyLTExLjMxNSA0NC4wMDktMTcuMDUzIDY4LjI2NS0xNy4wNTMgNy41NDQgMCAxNC4wNjQgNS4yNzEgMTUuNjQ1IDEyLjY0N2wyNS4xMTQgMTE3LjE5OWMxLjEzNyA1LjMwNy0uNDk0IDEwLjgyOS00LjMzMSAxNC42NjdsLTQyLjkxMyA0Mi45MTJjNDAuNDgyIDgwLjQ4NiAxMDYuMTcgMTQ2LjE3NCAxODYuNjU2IDE4Ni42NTZsNDIuOTEyLTQyLjkxM2MzLjgzOC0zLjgzNyA5LjM2MS01LjQ2NiAxNC42NjctNC4zMzFsMTE3LjE5OSAyNS4xMTRjNy4zNzcgMS41ODEgMTIuNjQ3IDguMTAxIDEyLjY0NyAxNS42NDUgMCAyNC4yNTYtNS43MzggNDcuMjI0LTE3LjA1NCA2OC4yNjYtMTAuNjExIDE5LjczMi0yNS45OTkgMzcuMDE0LTQ0LjUgNDkuOTc3LTE4LjQxOSAxMi45MDYtMzkuNzkyIDIxLjQzNC02MS44MDkgMjQuNjYzLTYuODk5IDEuMDEzLTEzLjc5NyAxLjUxOC0yMC42NjggMS41MTl6bS0yMzYuMzQ5LTQ3OS4zMjFjLTMxLjk5NSAzLjUzMi02MC4zOTMgMjAuMzAyLTc5LjI1MSA0Ny4yMTctMjEuMjA2IDMwLjI2NS0yNi4xNTEgNjcuNDktMTMuNTY3IDEwMi4xMzIgNDkuMzA0IDEzNS43MjYgMTU1LjQyNSAyNDEuODQ3IDI5MS4xNTEgMjkxLjE1MSAzNC42NDEgMTIuNTg0IDcxLjg2NiA3LjY0IDEwMi4xMzItMTMuNTY3IDI2LjkxNS0xOC44NTggNDMuNjg1LTQ3LjI1NiA0Ny4yMTctNzkuMjUxbC05NS4zNDEtMjAuNDMtNDQuODE2IDQ0LjgxNmMtNC43NjkgNC43NjktMTIuMDE1IDYuMDM2LTE4LjExNyAzLjE2OC05NS4xOS00NC43Mi0xNzIuMjQyLTEyMS43NzItMjE2Ljk2Mi0yMTYuOTYyLTIuODY3LTYuMTAzLTEuNjAxLTEzLjM0OSAzLjE2OC0xOC4xMTdsNDQuODE2LTQ0LjgxNnoiLz48L2c+PC9zdmc+" style="width: 10%;" /> --}}
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00ODUuNzQzLDg1LjMzM0gyNi4yNTdDMTEuODE1LDg1LjMzMywwLDk3LjE0OCwwLDExMS41ODlWNDAwLjQxYzAsMTQuNDQsMTEuODE1LDI2LjI1NywyNi4yNTcsMjYuMjU3aDQ1OS40ODcNCgkJCWMxNC40NCwwLDI2LjI1Ny0xMS44MTUsMjYuMjU3LTI2LjI1N1YxMTEuNTg5QzUxMiw5Ny4xNDgsNTAwLjE4NSw4NS4zMzMsNDg1Ljc0Myw4NS4zMzN6IE00NzUuODksMTA1LjAyNEwyNzEuMTA0LDI1OC42MjYNCgkJCWMtMy42ODIsMi44MDItOS4zMzQsNC41NTUtMTUuMTA1LDQuNTI5Yy01Ljc3LDAuMDI2LTExLjQyMS0xLjcyNy0xNS4xMDQtNC41MjlMMzYuMTA5LDEwNS4wMjRINDc1Ljg5eiBNMzY2LjUsMjY4Ljc2MQ0KCQkJbDExMS41OSwxMzcuODQ3YzAuMTEyLDAuMTM4LDAuMjQ5LDAuMjQzLDAuMzY4LDAuMzY4SDMzLjU0MmMwLjExOC0wLjEzMSwwLjI1Ni0wLjIzLDAuMzY4LTAuMzY4TDE0NS41LDI2OC43NjENCgkJCWMzLjQxOS00LjIyNywyLjc3MS0xMC40MjQtMS40NjQtMTMuODUxYy00LjIyNy0zLjQxOS0xMC40MjQtMi43NzEtMTMuODQ0LDEuNDU3bC0xMTAuNSwxMzYuNTAxVjExNy4zMzJsMjA5LjM5NCwxNTcuMDQ2DQoJCQljNy44NzEsNS44NjIsMTcuNDQ3LDguNDQyLDI2LjkxMiw4LjQ2OGM5LjQ1Mi0wLjAyLDE5LjAzNi0yLjYsMjYuOTEyLTguNDY4bDIwOS4zOTQtMTU3LjA0NnYyNzUuNTM0TDM4MS44MDcsMjU2LjM2Nw0KCQkJYy0zLjQyLTQuMjI3LTkuNjIzLTQuODc3LTEzLjg0NC0xLjQ1N0MzNjMuNzI5LDI1OC4zMjksMzYzLjA3OSwyNjQuNTM0LDM2Ni41LDI2OC43NjF6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" width="10%;"/>
                    &nbsp; 
                    <a href = "mailto: gabylitcan25@yahoo.com">gabylitcan25@yahoo.com</a>
                </div>
        </div>
    </div>        
</div>



    