@extends('inc.header')
<div class="container p-5">
    <form action="" method="post">
        @csrf
        <div class="form-group my-3">
            <label for="business_name">Business name</label>
            <input type="text" name="business_name" id="" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="bank_code">Select Bank</label>
            <select name="bank_code" id="" class="form-control">
                <option value="">Select bank</option>
                <option value="120001">9mobile 9Payment Service Bank</option>
                <option value="801">Abbey Mortgage Bank</option>
                <option value="51204">Above Only MFB</option>
                <option value="51312">Abulesoro MFB</option>
                <option value="044">Access Bank</option>
                <option value="063">Access Bank (Diamond)</option>
                <option value="602">Accion Microfinance Bank</option>
                <option value="120004">Airtel Smartcash PSB</option>
                <option value="035A">ALAT by WEMA</option>
                <option value="50926">Amju Unique MFB</option>
                <option value="50083">Aramoko MFB</option>
                <option value="401">ASO Savings and Loans</option>
                <option value="MFB50094">Astrapolaris MFB LTD</option>
                <option value="51229">Bainescredit MFB</option>
                <option value="50931">Bowen Microfinance Bank</option>
                <option value="565">Carbon</option>
                <option value="50823">CEMCS Microfinance Bank</option>
                <option value="50171">Chanelle Microfinance Bank Limited</option>
                <option value="023">Citibank Nigeria</option>
                <option value="50204">Corestep MFB</option>
                <option value="559">Coronation Merchant Bank</option>
                <option value="51297">Crescent MFB</option>
                <option value="050">Ecobank Nigeria</option>
                <option value="50263">Ekimogun MFB</option>
                <option value="098">Ekondo Microfinance Bank</option>
                <option value="50126">Eyowo</option>
                <option value="070">Fidelity Bank</option>
                <option value="51314">Firmus MFB</option>
                <option value="011">First Bank of Nigeria</option>
                <option value="214">First City Monument Bank</option>
                <option value="501">FSDH Merchant Bank Limited</option>
                <option value="812">Gateway Mortgage Bank LTD</option>
                <option value="00103">Globus Bank</option>
                <option value="100022">GoMoney</option>
                <option value="50739">Goodnews Microfinance Bank</option>
                <option value="562">Greenwich Merchant Bank</option>
                <option value="058">Guaranty Trust Bank</option>
                <option value="51251">Hackman Microfinance Bank</option>
                <option value="50383">Hasal Microfinance Bank</option>
                <option value="030">Heritage Bank</option>
                <option value="120002">HopePSB</option>
                <option value="51244">Ibile Microfinance Bank</option>
                <option value="50439">Ikoyi Osun MFB</option>
                <option value="50442">Ilaro Poly Microfinance Bank</option>
                <option value="50457">Infinity MFB</option>
                <option value="301">Jaiz Bank</option>
                <option value="50502">Kadpoly MFB</option>
                <option value="082">Keystone Bank</option>
                <option value="50200">Kredi Money MFB LTD</option>
                <option value="50211">Kuda Bank</option>
                <option value="90052">Lagos Building Investment Company Plc.</option>
                <option value="50549">Links MFB</option>
                <option value="031">Living Trust Mortgage Bank</option>
                <option value="303">Lotus Bank</option>
                <option value="50563">Mayfair MFB</option>
                <option value="50304">Mint MFB</option>
                <option value="120003">MTN Momo PSB</option>
                <option value="100002">Paga</option>
                <option value="999991">PalmPay</option>
                <option value="104">Parallex Bank</option>
                <option value="311">Parkway - ReadyCash</option>
                <option value="999992">Paycom</option>
                <option value="50746">Petra Mircofinance Bank Plc</option>
                <option value="076">Polaris Bank</option>
                <option value="50864">Polyunwana MFB</option>
                <option value="105">PremiumTrust Bank</option>
                <option value="101">Providus Bank</option>
                <option value="51293">QuickFund MFB</option>
                <option value="502">Rand Merchant Bank</option>
                <option value="90067">Refuge Mortgage Bank</option>
                <option value="125">Rubies MFB</option>
                <option value="51113">Safe Haven MFB</option>
                <option value="50582">Shield MFB</option>
                <option value="50800">Solid Rock MFB</option>
                <option value="51310">Sparkle Microfinance Bank</option>
                <option value="221">Stanbic IBTC Bank</option>
                <option value="068">Standard Chartered Bank</option>
                <option value="51253">Stellas MFB</option>
                <option value="232">Sterling Bank</option>
                <option value="100">Suntrust Bank</option>
                <option value="50968">Supreme MFB</option>
                <option value="302">TAJ Bank</option>
                <option value="090560">Tanadi Microfinance Bank</option>
                <option value="51269">Tangerine Money</option>
                <option value="51211">TCF MFB</option>
                <option value="102">Titan Bank</option>
                <option value="100039">Titan Paystack</option>
                <option value="MFB51322">Uhuru MFB</option>
                <option value="50871">Unical MFB</option>
                <option value="032">Union Bank of Nigeria</option>
                <option value="033">United Bank For Africa</option>
                <option value="215">Unity Bank</option>
                <option value="566">VFD Microfinance Bank Limited</option>
                <option value="035">Wema Bank</option>
                <option value="057">Zenith Bank</option>
                <option value="057">Zenith Bank</option>
            </select>
        </div>
        <div class="form-group my-3">
            <label for="account_number">Account number</label>
            <input type="number" name="account_number" id="" class="form-control">
        </div>
        <div class="form-group my-3">
            <label for="percentage_charge">Percentage charge</label>
            <input type="number" name="percentage_charge" id="" class="form-control">
        </div>
        <button class="btn btn-primary my-3">
            Create Sub Account
        </button>
    </form>
</div>
@extends('inc.footer')
