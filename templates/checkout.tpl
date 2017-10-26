{extends file="include/layout.tpl"}
{block name=body}
   <h1>BILLING INFORMATION</h1>
    <form id="formInscription" class="smallMarginBottom">
    <h2>Payement method</h2>
    <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">local_post_office</i>
            <input id="address" type="text" class="validate" value="XXXX XXXX XXXX 3333">
            <label for="address">Card number</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s3">
            <i class="material-icons prefix">local_post_office</i>
            <input id="address" type="text" class="validate" value="000">
            <label for="address">Secret Number</label>
        </div>
        <div class="col s3">
            <div class="input-field col s6">
                <i class="material-icons prefix">local_post_office</i>
                <input id="month" type="text" class="validate" value="12">
                <label for="month">Month</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">local_post_office</i>
                <input id="year" type="text" class="validate" value="12">
                <label for="year">Year</label>
            </div>
        </div>

    </div>
    <h2>Billing address</h2>
    <hr/>   
    <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">local_post_office</i>
            <input id="address" type="text" class="validate" value="15 rue Belle Vue">
            <label for="address">Address</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <i class="material-icons prefix">location_on</i>
            <input id="postalcode" type="text" class="validate" value="67120">
            <label for="postalcode">Postal Code</label>
        </div>
        <div class="input-field col s8">
            <i class="material-icons prefix">location_city</i>
            <input id="city" type="text" class="validate" value="Molsheim">
            <label for="city">City</label>
        </div>
    </div>
      
    <div class="row">
        <div class="col s4"></div>
        <div class="col s4">
            <button type="submit" class="btn mediumButtonCentered customLessPinkBackground borderPink">Modify Account Information</button>
        </div>
        <div class="col s4"></div>
      </div>
  </form>
{/block}