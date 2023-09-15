<div class="row">
  <form action="/weeks/week04/Example2Response" method="post">
    <fieldset>
      <legend>Enter your information in the form below:</legend>
      <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name" size="20" maxlength="40" required>
      </div>
      <div class="form-group">
        <label>Email Address:</label>
        <input type="email" class="form-control" name="email" size="40" maxlength="60" required>
      </div>
      <div class="form-group">
        <label>Gender:</label>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="M" value="M">
          <label class="form-check-label" for="M">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="F" value="F" checked>
          <label class="form-check-label" for="F">
            Female
          </label>
        </div>
      </div>
      <div class="form-group">
        <label>Age:</label>
        <select name="age">
          <option value="0-29">Under 30</option>
          <option value="30-60">Between 30 and 60</option>
          <option value="60+">Over 60</option>
        </select>

      </div>
      <div class="form-group">
        <label>Comments:</label>
        <textarea name="comments" rows="3" cols="40"></textarea>


      </div>
      <div class="form-group">

        <select name="textColor" id="textColor">
          <option value="white">White</option>
          <option value="yellow">Yellow</option>
          <option value="pink">Pink</option>
        </select>
        <label for="textColor">Desired text color:</label>


      </div>
      <div class="form-group">

        <select name="backgroundColor" id="backgroundColor">
          <option value="lightblue">Light Blue</option>
          <option value="green">Green</option>
          <option value="black">Black</option>
        </select>
        <label for="backgroundColor">Desired text color:</label>


      </div>
    </fieldset>

    <input type="submit" name="submit" class="btn btn-primary" value="Submit My Information">

  </form>
</div>