@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size:25px">{{ __('Dodaj nowego piłkarza') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card-body">
                        <form method="POST" action="{{ route('kadraadd') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right" style="font-size:35px;color: black;">{{ __('Imię') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="font-size:35px">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right" style="font-size:35px;color: black;">{{ __('Nazwisko') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{ old('surname') }}" style="font-size:35px">
                                </div>
                            </div>

                           <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:35px;color: black;">{{ __('Pozycja') }}</label>
                                <div class="col-md-6">
                            <select name='position' id='position' style="font-size:35px">
                        <option value="Bramkarz" style="font-size:35px">Bramkarz</option>
                          <option value="Prawy obrońca">Prawy obrońca</option>
                          <option value="Środkowy obrońca">Środkowy obrońca</option>
                          <option value="Lewy obrońca">Lewy obrońca</option>
                          <option value="Środkowy pomocnik">Środkowy pomocnik</option>
                          <option value="Defensywny pomocnik">Defensywny pomocnik</option>
                         <option value="Prawoskrzydłowy">Prawoskrzydłowy</option>
                          <option value="Lewoskrzydłowy">Lewoskrzydłowy</option>
                        <option value="Napastnik">Napastnik</option>
                          <option value="Środkowy napastnik">Środkowy napastnik</option>
                            </select>
                            </div>
                        </div>




                        <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:35px;color: black;">{{ __('Numer') }}</label>
                                <div class="col-md-6">
                            <select name='number' id='number' style="font-size:35px">
                       <option value="0" >0</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
                       <option value="16">16</option><option value="35">35</option><option value="18">18</option><option value="19">19</option><option value="35">35</option><option value="21">21</option>
                       <option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>
                       <option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option>
                       <option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option>
                       <option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option>
                       <option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option>
                       <option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option>
                       <option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option>
                       <option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option>
                       <option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option>
                       <option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option>
                       <option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option>
                       <option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option>
                       <option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option>
                       <option value="100">100</option>
                            </select> </div>
                        </div>








                            <div class="form-group row">
                                <label for="position" class="col-md-4 col-form-label text-md-right" style="font-size:35px;color: black;">{{ __('Wiek') }}</label>
                                <div class="col-md-6">
                            <select name='age' id='age' style="font-size:35px">
                        <option value="15" style="font-size:35px">15</option>
                        <option value="16">16</option>
                        <option value="35">35</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="35">35</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                            </select> </div>
                        </div>

                            

                                
                             <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right" style="font-size:35px;color: black;">{{ __('Narodowość') }}</label>
                                 <div class="col-md-6">
                            <select name='nationality' id='nationality' style="font-size:35px">
                                <option value="brak podanej" style="font-size:35px">-- wybierz --</option>
  <option value="Afganistan">Afganistan</option>
  <option value="Albania">Albania</option>
  <option value="Andora">Andora</option>
  <option value="Andora">Andora</option>
  <option value="Angola">Angola</option>
  <option value="Antigua i Barbuda ">Antigua i Barbuda</option>
  <option value="Arabia Saudyjska">Arabia Saudyjska</option>
  <option value="Argentyna">Argentyna</option>
  <option value="Armenia">Armenia</option>
  <option value="Australia">Australia</option>
  <option value="Austria">Austria</option>
  <option value="Azerbejdżan">Azerbejdżan</option>
  <option value="Bahamy">Bahamy</option>
  <option value="Bahrajn">Bahrajn</option>
  <option value="Bangladesz">Bangladesz</option>
  <option value="Barbados">Barbados</option>
  <option value="Botswana">Botswana</option>
  <option value="Białoruś">Białoruś</option>
  <option value="Belgia">Belgia</option>
  <option value="Belize">Belize</option>
  <option value="Benin">Benin</option>
  <option value="Bhutan">Bhutan</option>
  <option value="Boliwia">Boliwia</option>
  <option value="Bośnia i Hercegowina">Bośnia i Hercegowina</option>
  <option value="Brazylia">Brazylia</option>
  <option value="Wielka Brytania">Wielka Brytania</option>
  <option value="Brunei">Brunei</option>
  <option value="Bułgaria">Bułgaria</option>
  <option value="Burkina Faso">Burkina Faso</option>
  <option value="Burundi">Burundi</option>
  <option value="Czad">Czad</option>
  <option value="Chile">Chile</option>
  <option value="Chiny">Chiny</option>
  <option value="Chorwacja">Chorwacja</option>
  <option value="Cypr">Cypr</option>
  <option value="Czechy">Czechy</option>
  <option value="Czarnogóra">Czarnogóra</option>
  <option value="Dania">Dania</option>
  <option value="Demokratyczna Republika Konga">Demokratyczna Republika Konga</option>
  <option value="Dominika">Dominika</option>
  <option value="Dominikana">Dominikana</option>
  <option value="Dżibuti">Dżibuti</option>
  <option value="Egipt">Egipt</option>
  <option value="Ekwador">Ekwador</option>
  <option value="Erytrea">Erytrea</option>
  <option value="Estonia">Estonia</option>
  <option value="Eswatini">Eswatini</option>
  <option value="Etiopia">Etiopia</option>
  <option value="estonian">Estonian</option>
  <option value="Fidżi">Fidżi</option>
  <option value="Filipiny">Filipiny</option>
  <option value="Finlandia">Finlandia</option>
  <option value="Francja">Francja</option>
  <option value="Gabon">Gabon</option>
  <option value="Gambia">Gambia</option>
  <option value="Ghana">Ghana</option>
  <option value="Grecja">Grecja</option>
  <option value="Grenada">Grenada</option>
  <option value="Gruzja">Gruzja</option>
  <option value="Gujana">Gujana</option>
  <option value="Gwatemala">Gwatemala</option>
  <option value="Gwinea">Gwinea</option>
  <option value="Gwinea Bissau">Gwinea Bissau</option>
  <option value="Gwinea Równikowa">Gwinea Równikowa</option>
  <option value="Haiti">Haiti</option>
  <option value="Hiszpania">Hiszpania</option>
  <option value="Holandia">Holandia</option>
  <option value="Honduras">Honduras</option>
  <option value="Indie">Indie</option>
  <option value="Indonezja">Indonezja</option>
  <option value="Irak">Irak</option>
  <option value="Iran">Iran</option>
  <option value="Irlandia">Irlandia</option>
  <option value="Islandia">Islandia</option>
  <option value="Izrael">Izrael</option>
  <option value="Jamajka">Jamajka</option>
  <option value="Japonia">Japonia</option>
  <option value="Jemen">Jemen</option>
  <option value="Jordania">Jordania</option>
  <option value="Kambodża">Kambodża</option>
  <option value="Kamerun">Kamerun</option>
  <option value="Kanada">Kanada</option>
  <option value="Katar">Katar</option>
  <option value="Kazachstan">Kazachstan</option>
  <option value="Kenian">Kenia</option>
  <option value="Kirgistan">Kirgistan</option>
  <option value="Kiribati">Kiribati</option>
  <option value="Kolumbia">Kolumbia</option>
  <option value="Komory">Komory</option>
  <option value="Kongo">Kongo</option>
  <option value="Korea Południowa">Korea Południowa</option>
  <option value="Korea Północna">Korea Północna</option>
  <option value="Kostaryka">Kostaryka</option>
  <option value="Kuba">Kuba</option>
  <option value="Kuwejt">Kuwejt</option>
  <option value="Laos">Laos</option>
  <option value="Lesotho">Lesotho</option>
  <option value="Liban">Liban</option>
  <option value="Liberia">Liberia</option>
  <option value="Libia">Libia</option>
  <option value="Liechtenstein">Liechtenstein</option>
  <option value="Litwa">Litwa</option>
  <option value="Luksemburg">Luksemburg</option>
  <option value="Łotwa">Łotwa</option>
  <option value="Macedonia Północna">Macedonia Północna</option>
  <option value="Madagaskar">Madagaskar</option>
  <option value="Malawi">Malawi</option>
  <option value="Malediwy">Malediwy</option>
  <option value="Malezja">Malezja</option>
  <option value="Mali">Mali</option>
  <option value="Malta">Malta</option>
  <option value="Maroko">Maroko</option>
  <option value="Mauretania">Mauretania</option>
  <option value="Mauritius">Mauritius</option>
  <option value="Meksyk">Meksyk</option>
  <option value="Mikronezja">Mikronezja</option>
  <option value="Mjanma">Mjanma</option>
  <option value="Mołdawia">Mołdawia</option>
  <option value="Monako">Monako</option>
  <option value="Mongolia">Mongolia</option>
  <option value="Mozambik">Mozambik</option>
  <option value="Namibia">Namibia</option>
  <option value="Nauru">Nauru</option>
  <option value="Nepal">Nepal</option>
  <option value="Niemcy">Niemcy</option>
  <option value="Niger">Niger</option>
  <option value="Nigeria">Nigeria</option>
  <option value="Nikaragua">Nikaragua</option>
  <option value="Norwegia">Norwegia</option>
  <option value="Nowa Zelandia">Nowa Zelandia</option>
  <option value="Oman">Oman</option>
  <option value="Pakistan">Pakistan</option>
  <option value="Palau">Palau</option>
  <option value="Panama">Panama</option>
  <option value="Papua-Nowa Gwinea">Papua-Nowa Gwinea</option>
  <option value="Paragwaj">Paragwaj</option>
  <option value="Peru">Peru</option>
  <option value="Polska">Polska</option>
  <option value="RPA">RPA</option>
  <option value="RŚA">RśA</option>
  <option value="Republika Zielonego Przylądka">Republika Zielonego Przylądka</option>
  <option value="Rosja">Rosja</option>
  <option value="Rumunia">Rumunia</option>
  <option value="Rwanda">Rwanda</option>
  <option value="Saint Kitts i Nevis">Saint Kitts i Nevis</option>
  <option value="Saint Lucia">Saint Lucia</option>
  <option value="Saint Vincent i Grenadyny">Saint Vincent i Grenadyny</option>
  <option value="Salwador">Salwador</option>
  <option value="Samoa">Samoa</option>
  <option value="San Marino">San Marino</option>
  <option value="Senegal">Senegal</option>
  <option value="Serbia">Serbia</option>
  <option value="Seszele">Seszele</option>
  <option value="Sierra Leon">Sierra Leon</option>
  <option value="Singapur">Singapur</option>
  <option value="Słowacja">Słowacja</option>
  <option value="Słowenia">Słowenia</option>
  <option value="Somalia">Somalia</option>
  <option value="Sri Lanka">Sri Lanka</option>
  <option value="Sudan">Sudan</option>
  <option value="Sudan Południowy">Sudan Południowy</option>
  <option value="Surinam">Surinam</option>
  <option value="Syria">Syria</option>
  <option value="Szwajcaria">Szwajcaria</option>
  <option value="Szwecja">Szwecja</option>
  <option value="Tadżykistan">Tadżykistan</option>
  <option value="Tajlandia">Tajlandia</option>
  <option value="Tanzania">Tanzania</option>
  <option value="Timor Wschodni">Timor Wschodni</option>
  <option value="Togo">Togo</option>
  <option value="Tonga">Tonga</option>
  <option value="Trynidad i Tobago">Trynidad i Tobago</option>
  <option value="Tunezja">Tunezja</option>
  <option value="Turcja">Turcja</option>
  <option value="Turkmenistan">Turkmenistan</option>
  <option value="Tuvalu">Tuvalu</option>
  <option value="Uganda">Uganda</option>
  <option value="Ukraina">Ukraina</option>
  <option value="Urugwaj">Urugwaj</option>
  <option value="USA">USA</option>
  <option value="Uzbekistan">Uzbekistan</option>
  <option value="Vanuatu">Vanuatu</option>
  <option value="Watykan">Watykan</option>
  <option value="Wenezuela">Wenezuela</option>
  <option value="Węgry">Węgry</option>
  <option value="Wietnam">Wietnam</option>
  <option value="Włochy">Włochy</option>
  <option value="WKS">WKS</option>
  <option value="Wyspy Salomona">Wyspy Salomona</option>
  <option value="Wyspy Świętego Tomasza i Książęca">Wyspy Świętego Tomasza i Książęca</option>
  <option value="Zambia">Zambia</option>
  <option value="Zimbabwe">Zimbabwe</option>
  <option value="ZEA">ZEA</option>
                            </select> </div> </div>








                             <div class="form-group row" style="font-size:35px;color: black;">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Długość kontraktu') }}</label>
                                 <div class="col-md-6">
                            <select name='contract' id='contract' style="font-size:35px">
                        <option value="2021" style="font-size:35px">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                         <option value="2027">2027</option>
                          <option value="2028">2028</option>
                        <option value="2029">2029</option>
                          <option value="2030">2030</option>
                            </select> </div>
</div>

    
                    
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-size:35px">
                                        {{ __('Dodaj zawodnika') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
