<div class="room_addition-form-container" id="room_addition-form-container">
  <button onclick="popupform()" class="close-btn">
  <img class="close-image" src="img/close-icon.jpg" alt="close-icon">
</button>
  <h1 class="main_heading">Tour Addition</h1>
  <p>Enhance Your Wild Life Safari Experience</p>
  <form class="room_addition-form" action="includes/addrooms.php" method="POST" enctype="multipart/form-data">
    <label class="label" for="Tour_type">Tour Type Name</label>
    <input
      type="text"
      name="Tour_type"
      id="Tour_type"
      class="input"
      required
    />
    <label class="label" for="price">Price ($)</label>
    <input
      type="number"
      name="price"
      id="price"
      class="input"
      required
    />
    <label class="label" for="VehicleType">Vehicle Type</label>
    <input
      type="text"
      name="VehicleType"
      id="VehicleType"
      class="input"
      required
    />
    <label class="label" for="capacity">Capacity</label>
    <input
      type="text"
      name="capacity"
      id="capacity"
      class="input"
      required
    />
    <label class="label" for="Fac">Includs</label>
    <input
      type="text"
      name="fac"
      id="fac"
      class="input"
      required
    />
    <label class="label" for="more">More About Tours</label>
    <input
      type="text"
      name="more"
      id="more"
      class="input"
      required
    />
   <!-- <label class="label" for="quantity">Quantity</label>
    <input
      type="number"
      name="quantity"
      id="quantity"
      class="input"
      required
    /> -->
    <label class="label" for="description">Description</label>
    <textarea class="input text-area" name="des" id="des" cols="30" rows="50"></textarea>

    <label class="label" for="image">Upload an image</label>
    <input class="input" type="file" accept="image/*" name="image" style="border: none;" required/>
    <input class="submit-btn" type="submit" name="Sub" value="Add Tour">
  </form>
</div>
<script src="js/addroomform.js"></script>