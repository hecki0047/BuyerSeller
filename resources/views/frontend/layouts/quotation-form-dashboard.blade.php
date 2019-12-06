<div>
            <p style="padding-left:15px;" class="title_home">Request for Quotation 
            <a class="pull-right" style="font-weight: 300; font-size: 12px" href="{{URL::to('buying-request',null,is_secured())}}">Learn more</a>
            </p>
            <p style="margin-left: 15px; font-weight: 300; font-size: 12px"> Just make a <b>single</b> Request & receive <b>multiple</b> Quotes</p>
            <?php
                // use App\Model\User;
                $units=DB::table('product_unit')->get();
                /*$total_suppliers = User::whereHas('Role_user',function($subQuery){
                    $subQuery->where('role_id','3');
                })->count();*/
            ?>
            <!-- <p style="padding-left:15px;">Receive quotations from <span style="color: lightblue">{-{$total_suppliers}-}</span> Suppliers within an average of <span style="color: lightblue">17230</span> Minutes.</p> -->
            <?php
                if (session()->has('quotation_limit_alert')) {
                    echo '<div style="padding-left: 316px;margin-bottom: 10px;"><div class="alert-box warning"><i style="color:#ce801f;" class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Warning: </span>'.session()->get('quotation_limit_alert').'.</div></div>';
                }
            ?>
            
            <form action="{!!URL::to('get_quotations',null,is_secured())!!}" method="post" class="get_qutations" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="dash-frm">
                <input type="hidden" name="t" value="d">
                <p class="{{$errors->has('product_name')?'to-err':''}}" style="font-weight: bold;margin: 10px 0 5px 0;">Product Name:</p>
                <div>
                    <input class="dash-inp {{$errors->has('product_name')?'to-err2':''}}" type="text" name="product_name" placeholder="Please enter Product name." value="{{ Input::old('product_name') }}">
                    @if($errors->has('product_name'))
                    <p class="text-danger">{{$errors->first('product_name')}}</p>
                    @endif
                </div>
                <div class="dash-focus">
                    
                    <p class="{{$errors->has('details')?'to-err':''}}" style="font-weight: bold;margin: 10px 0 5px 0;">Product Detailed Specification:</p>
                    <div>
                        <textarea name="details" style="width: 100%; background: white; border: 1px solid #aaa;" rows="5" placeholder="Product details..." class="{{$errors->has('details')?'to-err2':''}}"><?php if(Input::old('details') == null || Input::old('details') == ''){echo "";}else{ echo Input::old('details');} ?></textarea>
                        @if($errors->has('details'))
                        <p class="text-danger">{{$errors->first('details')}}</p>
                        @endif
                    </div>
                    <p style="font-weight: bold;margin: 10px 0 5px 0;">Estimated Order Quantity:</p>
                    <div class="row" style="display: flex;">
                        <div class="col-sm-6">
                            <input class="{{$errors->has('quantity')?'to-err2':''}}" name="quantity" style="flex:1; margin-right: 5px;width:100%;" type="number" placeholder="Quantity" value="{{ Input::old('quantity') }}">
                            @if($errors->has('quantity'))
                            <p class="text-danger">{{$errors->first('quantity')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <select class="{{$errors->has('unit')?'to-err2':''}}" name="unit" style="flex:1; padding: 2.3px;width:100%;" value="{{ Input::old('unit') }}">
                                <option value="0" >Select Unit</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id }}" >{{$unit->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('unit'))
                            <p class="text-danger">{{$errors->first('unit')}}</p>
                            @endif
                        </div>
                    </div>
                    <p style="font-weight: bold;margin: 10px 0 5px 0;">Preferred Unit Price:</p>
                    <div class="row" style="display: flex;">
                        <div class="col-sm-6">
                            <input class="{{$errors->has('unit_price')?'to-err2':''}}" name="unit_price" style="flex:1; margin-right: 5px;width:100%;padding: 1px;" type="text" placeholder="Preferred Unit Price" value="{{ Input::old('unit_price') }}">
                            @if($errors->has('unit_price'))
                            <p class="text-danger">{{$errors->first('unit_price')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <select class="{{$errors->has('currency')?'to-err2':''}}" name="currency" style="flex:1; padding: 2.3px;width:100%;" value="{{ Input::old('currency') }}">
                                <option value="0">Select currency</option>
                                <option value="USD">America (United States) Dollars – USD</option>
                                <option value="AFN">Afghanistan Afghanis – AFN</option>
                                <option value="ALL">Albania Leke – ALL</option>
                                <option value="DZD">Algeria Dinars – DZD</option>
                                <option value="ARS">Argentina Pesos – ARS</option>
                                <option value="AUD">Australia Dollars – AUD</option>
                                <option value="ATS">Austria Schillings – ATS</option>
                                <option value="BSD">Bahamas Dollars – BSD</option>
                                <option value="BHD">Bahrain Dinars – BHD</option>
                                <option value="BDT">Bangladesh Taka – BDT</option>
                                <option value="BBD">Barbados Dollars – BBD</option>
                                <option value="BEF">Belgium Francs – BEF</option>
                                <option value="BMD">Bermuda Dollars – BMD</option>
                                <option value="BRL">Brazil Reais – BRL</option>
                                <option value="BGN">Bulgaria Leva – BGN</option>
                                <option value="CAD">Canada Dollars – CAD</option>
                                <option value="XOF">CFA BCEAO Francs – XOF</option>
                                <option value="XAF">CFA BEAC Francs – XAF</option>
                                <option value="CLP">Chile Pesos – CLP</option>
                                <option value="CNY">China Yuan Renminbi – CNY</option>
                                <option value="RMB - CNY">RMB (China Yuan Renminbi) – CNY</option>
                                <option value="COP">Colombia Pesos – COP</option>
                                <option value="XPF">CFP Francs – XPF</option>
                                <option value="CRC">Costa Rica Colones – CRC</option>
                                <option value="HRK">Croatia Kuna – HRK</option>
                                <option value="CYP">Cyprus Pounds – CYP</option>
                                <option value="CZK">Czech Republic Koruny – CZK</option>
                                <option value="DKK">Denmark Kroner – DKK</option>
                                <option value="DEM">Deutsche (Germany) Marks – DEM</option>
                                <option value="DOP">Dominican Republic Pesos – DOP</option>
                                <option value="NLG">Dutch (Netherlands) Guilders – NLG</option>
                                <option value="XCD">Eastern Caribbean Dollars – XCD</option>
                                <option value="EGP">Egypt Pounds – EGP</option>
                                <option value="EEK">Estonia Krooni – EEK</option>
                                <option value="EUR">Euro – EUR</option>
                                <option value="FJD">Fiji Dollars – FJD</option>
                                <option value="FIM">Finland Markkaa – FIM</option>
                                <option value="FRF*">France Francs – FRF*</option>
                                <option value="DEM">Germany Deutsche Marks – DEM</option>
                                <option value="XAU">Gold Ounces – XAU</option>
                                <option value="GRD">Greece Drachmae – GRD</option>
                                <option value="GTQ">Guatemalan Quetzal – GTQ</option>
                                <option value="NLG">Holland (Netherlands) Guilders – NLG</option>
                                <option value="HKD">Hong Kong Dollars – HKD</option>
                                <option value="HUF">Hungary Forint – HUF</option>
                                <option value="ISK">Iceland Kronur – ISK</option>
                                <option value="XDR">IMF Special Drawing Right – XDR</option>
                                <option value="INR">India Rupees – INR</option>
                                <option value="IDR">Indonesia Rupiahs – IDR</option>
                                <option value="IRR">Iran Rials – IRR</option>
                                <option value="IQD">Iraq Dinars – IQD</option>
                                <option value="IEP*">Ireland Pounds – IEP*</option>
                                <option value="ILS">Israel New Shekels – ILS</option>
                                <option value="ITL*">Italy Lire – ITL*</option>
                                <option value="JMD">Jamaica Dollars – JMD</option>
                                <option value="JPY">Japan Yen – JPY</option>
                                <option value="JOD">Jordan Dinars – JOD</option>
                                <option value="KES">Kenya Shillings – KES</option>
                                <option value="KRW">Korea (South) Won – KRW</option>
                                <option value="KWD">Kuwait Dinars – KWD</option>
                                <option value="LBP">Lebanon Pounds – LBP</option>
                                <option value="LUF">Luxembourg Francs – LUF</option>
                                <option value="MYR">Malaysia Ringgits – MYR</option>
                                <option value="MTL">Malta Liri – MTL</option>
                                <option value="MUR">Mauritius Rupees – MUR</option>
                                <option value="MXN">Mexico Pesos – MXN</option>
                                <option value="MAD">Morocco Dirhams – MAD</option>
                                <option value="NLG">Netherlands Guilders – NLG</option>
                                <option value="NZD">New Zealand Dollars – NZD</option>
                                <option value="NOK">Norway Kroner – NOK</option>
                                <option value="OMR">Oman Rials – OMR</option>
                                <option value="PKR">Pakistan Rupees – PKR</option>
                                <option value="XPD">Palladium Ounces – XPD</option>
                                <option value="PEN">Peru Nuevos Soles – PEN</option>
                                <option value="PHP">Philippines Pesos – PHP</option>
                                <option value="XPT">Platinum Ounces – XPT</option>
                                <option value="PLN">Poland Zlotych – PLN</option>
                                <option value="PTE">Portugal Escudos – PTE</option>
                                <option value="QAR">Qatar Riyals – QAR</option>
                                <option value="RON">Romania New Lei – RON</option>
                                <option value="ROL">Romania Lei – ROL</option>
                                <option value="RUB">Russia Rubles – RUB</option>
                                <option value="SAR">Saudi Arabia Riyals – SAR</option>
                                <option value="XAG">Silver Ounces – XAG</option>
                                <option value="SGD">Singapore Dollars – SGD</option>
                                <option value="SKK">Slovakia Koruny – SKK</option>
                                <option value="SIT">Slovenia Tolars – SIT</option>
                                <option value="ZAR">South Africa Rand – ZAR</option>
                                <option value="KRW">South Korea Won – KRW</option>
                                <option value="ESP">Spain Pesetas – ESP</option>
                                <option value="XDR">Special Drawing Rights (IMF) – XDR</option>
                                <option value="LKR">Sri Lanka Rupees – LKR</option>
                                <option value="SDD">Sudan Dinars – SDD</option>
                                <option value="SEK">Sweden Kronor – SEK</option>
                                <option value="CHF">Switzerland Francs – CHF</option>
                                <option value="TWD">Taiwan New Dollars – TWD</option>
                                <option value="THB">Thailand Baht – THB</option>
                                <option value="TTD">Trinidad and Tobago Dollars – TTD</option>
                                <option value="TND">Tunisia Dinars – TND</option>
                                <option value="TRY">Turkey New Lira – TRY</option>
                                <option value="AED">United Arab Emirates Dirhams – AED</option>
                                <option value="GBP">United Kingdom Pounds – GBP</option>
                                <option value="USD">United States Dollars – USD</option>
                                <option value="VEB">Venezuela Bolivares – VEB</option>
                                <option value="VND">Vietnam Dong – VND</option>
                                <option value="ZMK">Zambia Kwacha – ZMK</option>
                            </select>
                            @if($errors->has('currency'))
                            <p class="text-danger">{{$errors->first('currency')}}</p>
                            @endif
                        </div>
                            
                            
                    </div>
                    <div style="padding: 7px 0px;" class="ui-form-control">
                        <label>
                            <input type="checkbox" checked="checked">
                            I agree to share my Business Card with quoted suppliers.
                        </label>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">

                </div>
                
            </div>
            </form>
        </div>