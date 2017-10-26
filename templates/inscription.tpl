{extends file="include/layout.tpl"}
{block name=body}

    <h1>INSCRIPTION</h1>
    <form id="formInscription" class="smallMarginBottom">
      <h2> Login information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="login" type="text" class="validate">
          <label for="login">Login</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="password2" type="password" class="validate">
          <label for="password2">Password confirmation</label>
        </div>
      </div>
      
      <h2>Personal information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s4">
          <i class="material-icons prefix">cake</i>
          <input id="birthdate" type="text" class="datepicker">
          <label for="birthdate">Birthdate</label>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="email" class="validate" onchange="checkMail()">
          <label for="email" data-error="Wrong email">Contact email</label>
        </div>
        
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="phone" type="tel" class="validate" onchange="checkPhone()">
          <label for="phone" data-error="Wrong phone number">Phone number</label>
        </div>
      </div>
    
      

      <h2>Delivery information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">local_post_office</i>
          <input id="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <i class="material-icons prefix">location_on</i>
          <input id="postalcode" type="text" class="validate">
          <label for="postalcode">Postal Code</label>
        </div>
        <div class="input-field col s8">
          <i class="material-icons prefix">location_city</i>
          <input id="city" type="text" class="validate">
          <label for="city">City</label>
        </div>
        
      </div>
      <div class="row">
        <div class="col s4"></div>
        <div class="col s4">
            <button type="submit" class="btn mediumButtonCentered customLessPinkBackground borderPink">Submit</button>
        </div>
        <div class="col s4"></div>
      </div>
    </form>
  {block name=jsblock}
      <script type="text/javascript" src="js/inscription.js"></script>
  {/block}

{/block}