<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <title>Test PHP MAILER</title>
        </head>
        <body>
            <div class="container col-md-6">
                <div class="card">
                    @if(Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif
                    <h5 class="card-header">Contact Form</h5>
                    <div class="card-body">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <label for="name">Nama</label>
                            <input class="form-control" type="text" name="name" placeholder="input nama kamu..." />

                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="input email kamu..." />

                            <label for="email">Subjek</label>
                            <input class="form-control" type="text" name="subject" placeholder="input subjek kamu..." />

                            <label for="message">Pesan</label>
                            <textarea class="form-control" name="message" id="" placeholder="input pesan kamu..." cols="30" rows="10"></textarea>
                            <br><br>
                            <button class="btn btn-success btn-block">Send</button>
                        <form>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    </html>