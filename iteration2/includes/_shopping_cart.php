<?php
echo '<div id="mModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div id="modal-body">
          </div>
          <form>
            <div class="">
              <ul class="nItems">
                <label for="num">Quantity:</label>
                <li><select id="num" onchange="artQuantity(this)">
                  <option value="SQ">Select Quantity</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select></li><br>
                <label for="artworks">Artworks:</label>
                <li><select id="artworks" onchange="artworkSelect(this)">
                    <option value="pick">Select an Artwork</option>
                    <option value="Mona Lisa">Mona Lisa ($1,000,000,000 USD)</option>
                    <option value="De Matteis Triumph of the Immaculate Anagoria">De Matteis Triumph of the Immaculate Anagoria ($200,000,000 USD)</option>
                    <option value="The Delivery of the Keys to Saint Peter">The Delivery of the Keys to Saint Peter($999,999 USD)</option>
                    <option value="The Starry Night">The Starry Night ($300,000,000 USD)</option>
                    <option value="The Creation of Adam">The Creation of Adam($300,000 USD)</option>
                    </select></li><br>
                <label for="ship">Shipping Method:</label>
                <li><select id="SM" onchange="shipMethod(this)">
                <option value="ssm">Select Shipping Method</option>
                <option value="express">Express ($19.95 USD)</option>
                <option value="2DS">2-Day Shipping ($14.95 USD)</option>
                <option value="standard">Standard ($10.95 USD)</option>
                </select></li><br>
                <button type="button" onclick="invoice()">Proceed to Checkout</button>
            </div>
          </form>
        </div>
      </div>';
?>
