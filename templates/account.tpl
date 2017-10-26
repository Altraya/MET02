{extends file="include/layout.tpl"}
{block name=body}

    <h1>ACCOUNT INFORMATION</h1>
    <form id="formInscription" class="smallMarginBottom">

      <h2>Personal information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate" value="Baptiste">
          <label for="first_name">First Name</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate" value="Oberbach">
          <label for="last_name">Last Name</label>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="email" class="validate" value="o.baptiste@wanadoo.fr">
          <label for="email" data-error="Wrong email">Contact email</label>
        </div>
        
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" value="06 46 69 04 54">
          <label for="icon_telephone">Phone number</label>
        </div>
      </div>
    
      

      <h2>Delivery information</h2>
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