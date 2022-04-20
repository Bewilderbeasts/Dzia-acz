<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    

    <style>
        .text-right {
            text-align: right;
        }
    </style>

</head>
<body class="login-page" style="background: white">

    <div>
        <div class="row">
            <div class="col-xs-7">
                <h4>From:</h4>
                <strong>Company Inc.</strong><br>
                123 Company Ave. <br>
                Toronto, Ontario - L2R 5A4<br>
                P: (416) 123-4567 <br>
                E: copmany@company.com <br>

                <br>
            </div>

            <div class="col-xs-4">
                <img src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1537151698/website/logo.png" alt="logo">
            </div>
        </div>

        <div style="margin-bottom: 0px">&nbsp;</div>

        <div class="row">
            <div class="col-xs-6">
                <h4>To:</h4>
                <address>
                    <strong>Andre Madarang</strong><br>
                    <span>andre@andre.com</span> <br>
                    <span>123 Address St.</span>
                </address>
            </div>

            <div class="col-xs-5">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th>Invoice Num:</th>
                            <td class="text-right">56</td>
                        </tr>
                        <tr>
                            <th> Invoice Date: </th>
                            <td class="text-right">Oct 1, 2018</td>
                        </tr>
                    </tbody>
                </table>

                <div style="margin-bottom: 0px">&nbsp;</div>

                <table style="width: 100%; margin-bottom: 20px">
                    <tbody>
                        <tr class="well" style="padding: 5px">
                            <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                            <td style="padding: 5px" class="text-right"><strong> $600 </strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <table class="table">
            <thead style="background: #F5F5F5;">
                <tr>
                    <th>Item List</th>
                    <th></th>
                    <th class="text-right">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div><strong>Service</strong></div>
                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat similique nisi. Nisi ratione, molestias exercitationem illo reiciendis cumque?</p></td>
                        <td></td>
                        <td class="text-right">$600</td>
                </tr>
                <tr>
                    <td><div><strong>Service</strong></div>
                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat similique nisi. Nisi ratione, molestias exercitationem illo reiciendis cumque?</p></td>
                        <td></td>
                        <td class="text-right">$600</td>
                </tr>
            </tbody>
        </table>

            <div class="row">
                <div class="col-xs-6"></div>
                <div class="col-xs-5">
                    <table style="width: 100%">
                        <tbody>
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                                <td style="padding: 5px" class="text-right"><strong> $600 </strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <div class="row">
                <div class="col-xs-8 invbody-terms">
                    Thank you for your business. <br>
                    <br>
                    <h4>Payment Terms</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eius quia, aut doloremque, voluptatibus quam ipsa sit sed enim nam dicta. Soluta eaque rem necessitatibus commodi, autem facilis iusto impedit!</p>
                </div>
            </div>
        </div>





<!DOCTYPE html>
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>

    *{
    font-family:"DeJaVu Sans Mono",monospace;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<img src="images/pzpn.jpg"  width="750" height="100" class="center">
<p></p>
<div class="col-xs-5">
<table style="width:811px">
    <tr>
        <th>  </th>
   <th> Spotkanie: {{$match}}</th>
    <th style="width:5%">   &nbsp; </th>
  </tr>
  <tr>
    <th>  </th>
  <th>  Formacja: {{$formation}} </th>
   <th style="width:5%">   &nbsp; </th>
  </tr>
  <tr>
    <th style="width:5%">  &nbsp;</th>
    <th> &nbsp; </th>
    <th style="width:5%">   &nbsp; </th>
  </tr>
  <tr>
    <th style="width:5%">Numer</th>
    <th>Imię i nazwisko zawodnika</th>
    <th style="width:5%">  Wiek </th>
  </tr>
  <tr>
    <th style="width:5%">{{$numer1}} </td>
    <td>{{$nazwisko1}} </td>
    <td>{{$wiek1}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer2}} </td>
    <td>{{$nazwisko2}} </td>
    <td>{{$wiek2}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer3}} </td>
    <td>{{$nazwisko3}} </td>
    <td>{{$wiek3}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer4}} </td>
    <td>{{$nazwisko4}} </td>
    <td>{{$wiek4}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer5}} </td>
    <td>{{$nazwisko5}} </td>
    <td>{{$wiek5}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer6}} </td>
    <td>{{$nazwisko6}} </td>
    <td>{{$wiek6}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer7}} </td>
    <td>{{$nazwisko7}} </td>
    <td>{{$wiek7}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer8}} </td>
    <td>{{$nazwisko8}} </td>
    <td>{{$wiek8}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer9}} </td>
    <td>{{$nazwisko9}} </td>
    <td>{{$wiek9}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer10}} </td>
    <td>{{$nazwisko10}} </td>
    <td>{{$wiek10}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer11}} </td>
    <td>{{$nazwisko11}} </td>
    <td>{{$wiek11}}</td>
  </tr>
  
</table>
</div>

<p >Kapitan drużyny - podpis: .........................................................</p>


<p style="text-indent: 10%;"><b>WYKAZ OSÓB UPRAWNIONYCH DO PRZEBYWANIA NA ŁAWCE REZERWOWYCH</b></p>

<table style="width:811px">
    
  <tr>
    <th>  </th>
  <th>  ZAWODNICY REZERWOWI </th>
   <th style="width:5%">  &nbsp </th>
  </tr>
  
  <tr>
    <th style="width:5%">Numer</th>
    <th>Imię i nazwisko zawodnika</th>
    <th style="width:5%">  Wiek </th>
  </tr>
  <tr>
    <th style="width:5%">{{$numer12}} </td>
    <td>{{$nazwisko12}} </td>
    <td>{{$wiek12}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer13}} </td>
    <td>{{$nazwisko13}} </td>
    <td>{{$wiek13}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer14}} </td>
    <td>{{$nazwisko14}} </td>
    <td>{{$wiek14}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer15}} </td>
    <td>{{$nazwisko15}} </td>
    <td>{{$wiek15}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer16}} </td>
    <td>{{$nazwisko16}} </td>
    <td>{{$wiek16}}</td>
  </tr>
  <tr>
    <th style="width:5%">{{$numer17}} </td>
    <td>{{$nazwisko17}} </td>
    <td>{{$wiek17}}</td>
  </tr>
   <tr>
    <th style="width:5%">{{$numer18}} </td>
    <td>{{$nazwisko18}} </td>
    <td>{{$wiek18}}</td>
  </tr>
  
</table>


<p>Kierownik drużyny - podpis: .........................................................</p>

</body>
</html>

<a href="{{ url('/raport') }}" class="btn btn-xs btn-info pull-right">Edit</a>

    </body>
    </html>