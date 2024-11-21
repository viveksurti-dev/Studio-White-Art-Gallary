<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <title>Button and Div Example</title>
        <style>
            .hide {
                display: none;
            }

            .quantity-box {
                display: flex;
                max-width: 200px;
            }

            .quantity-input {
                flex: 1;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <p>Total Price: <strike>Rs <span id="totalPrice">9265.00</span></strike></p>
            <p>Offer Price: Rs <span id="offerPrice">5559.00</span></p>
        </div>

        <div class="container mt-5">
            <button class="btn btn-primary" onclick="showDiv(1)">Single</button>
            <button class="btn btn-primary" onclick="showDiv(2)">Double</button>
            <button class="btn btn-primary" onclick="showDiv(3)">Queen</button>
            <button class="btn btn-primary" onclick="showDiv(4)">King</button>
            <button class="btn btn-primary" onclick="showDiv(5)">Custom</button>

            <div id="div1" class="mt-3 row">
                <div class="form-group col-md-2">
                    <label class="mb-2">Unit of Measurement</label>
                    <select class="form-control">
                        <option value="Inches">Inches</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label class="mb-2">Step 3: Length & Width</label>
                    <select class="form-control" onchange="updatePrice(this)">
                        <option value="9265" data-mrp="9265.00" data-offer="5559.00" data-l="72" data-w="30">72 Inch X
                            30 Inch</option>
                        <option value="9471" data-mrp="9471.00" data-offer="5682.00" data-l="72" data-w="36">72 Inch X
                            36 Inch
                        </option>
                        <option value="9724" data-mrp="9724.00" data-offer="5834.00" data-l="75" data-w="36">75 Inch X
                            36 Inch
                        </option>
                        <option value="9977" data-mrp="9977.00" data-offer="5986.00" data-l="78" data-w="36">78 Inch X
                            36 Inch
                        </option>
                        <option value="10631" data-mrp="10631.00" data-offer="6378.00" data-l="72" data-w="42">72 Inch X
                            42 Inch
                        </option>
                        <option value="10925" data-mrp="10925.00" data-offer="6555.00" data-l="75" data-w="42">75 Inch X
                            42 Inch
                        </option>
                        <option value="11218" data-mrp="11218.00" data-offer="6730.00" data-l="78" data-w="42">78 Inch X
                            42 Inch
                        </option>
                    </select>
                </div>
            </div>

            <div id="div2" class="hide row mt-3">
                <div class="form-group col-md-2">
                    <label class="mb-2">Unit of Measurement</label>
                    <select class="form-control">
                        <option value="Inches">Inches</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label class="mb-2">Step 3: Length & Width</label>
                    <select class="form-control" onchange="updatePrice(this)">
                        <option value="11970" data-mrp="11970.00" data-offer="7182.00" data-l="72" data-w="48">72 Inch X
                            48 Inch
                        </option>
                        <option value="12308" data-mrp="12308.00" data-offer="7384.00" data-l="75" data-w="48">75 Inch X
                            48 Inch
                        </option>
                        <option value="12646" data-mrp="12646.00" data-offer="7587.00" data-l="78" data-w="48">78 Inch X
                            48 Inch
                        </option>
                    </select>
                </div>
            </div>

            <div id="div3" class="hide mt-3 row">
                <div class="form-group col-md-2">
                    <label class="mb-2">Unit of Measurement</label>
                    <select class="form-control">
                        <option value="Inches">Inches</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label class="mb-2">Step 3: Length & Width</label>
                    <select class="form-control" onchange="updatePrice(this)">
                        <option value="14560" data-mrp="14560.00" data-offer="8736.00" data-l="72" data-w="60">72 Inch X
                            60 Inch
                        </option>
                        <option value="14977" data-mrp="14977.00" data-offer="8986.00" data-l="75" data-w="60">75 Inch X
                            60 Inch
                        </option>
                        <option value="15394" data-mrp="15394.00" data-offer="9236.00" data-l="78" data-w="60">78 Inch X
                            60 Inch
                        </option>
                        <option value="15988" data-mrp="15988.00" data-offer="9592.00" data-l="72" data-w="66">72 Inch X
                            66 Inch
                        </option>
                        <option value="16445" data-mrp="16445.00" data-offer="9867.00" data-l="75" data-w="66">75 Inch X
                            66 Inch
                        </option>
                        <option value="16906" data-mrp="16906.00" data-offer="10143.00" data-l="78" data-w="66">78 Inch
                            X 66 Inch
                        </option>
                    </select>
                </div>
            </div>

            <div id="div4" class="hide mt-3 row">
                <div class="form-group col-md-2">
                    <label class="mb-2">Unit of Measurement</label>
                    <select class="form-control">
                        <option value="Inches">Inches</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inches1" class="mb-2">Step 3: Length & Width</label>
                    <select class="form-control" onchange="updatePrice(this)">
                        <option value="17259" data-mrp="17259.00" data-offer="10355.00" data-l="72" data-w="72">72 Inch
                            X 72 Inch
                        </option>
                        <option value="17758" data-mrp="17758.00" data-offer="10654.00" data-l="75" data-w="72">75 Inch
                            X 72 Inch
                        </option>
                        <option value="18250" data-mrp="18250.00" data-offer="10950.00" data-l="78" data-w="72">78 Inch
                            X 72 Inch
                        </option>
                        <option value="19908" data-mrp="19908.00" data-offer="11944.00" data-l="84" data-w="72">84 Inch
                            X 72 Inch
                        </option>
                        <option value="21310" data-mrp="21310.00" data-offer="12786.00" data-l="84" data-w="78">84 Inch
                            X 78 Inch
                        </option>
                        <option value="22713" data-mrp="22713.00" data-offer="13627.00" data-l="84" data-w="84">84 Inch
                            X 84 Inch
                        </option>
                    </select>
                </div>
            </div>

            <div id="div5" class="hide mt-3">

                <div class="form-group w-25">
                    <label class="mb-1">Unit of Measurement</label>
                    <select class="form-control">
                        <option value="Inches">Inches</option>
                    </select>

                    <label class="mb-1 mt-2">Have All Size Value</label>
                    <select class="form-control" id="customDropdown" onchange="updatePrice(this)">
                        <option value="9265" data-mrp="9265.00" data-offer="5559.00" data-l="72" data-w="30">72 Inch X
                            30 Inch</option>
                        <option value="9471" data-mrp="9471.00" data-offer="5682.00" data-l="72" data-w="36">72 Inch X
                            36 Inch
                        </option>
                        <option value="9724" data-mrp="9724.00" data-offer="5834.00" data-l="75" data-w="36">75 Inch X
                            36 Inch
                        </option>
                        <option value="9977" data-mrp="9977.00" data-offer="5986.00" data-l="78" data-w="36">78 Inch X
                            36 Inch
                        </option>
                        <option value="10631" data-mrp="10631.00" data-offer="6378.00" data-l="72" data-w="42">72 Inch X
                            42 Inch
                        </option>
                        <option value="10925" data-mrp="10925.00" data-offer="6555.00" data-l="75" data-w="42">75 Inch X
                            42 Inch
                        </option>
                        <option value="11218" data-mrp="11218.00" data-offer="6730.00" data-l="78" data-w="42">78 Inch X
                            42 Inch
                        </option>
                        <option value="11970" data-mrp="11970.00" data-offer="7182.00" data-l="72" data-w="48">72 Inch X
                            48 Inch
                        </option>
                        <option value="12308" data-mrp="12308.00" data-offer="7384.00" data-l="75" data-w="48">75 Inch X
                            48 Inch
                        </option>
                        <option value="12646" data-mrp="12646.00" data-offer="7587.00" data-l="78" data-w="48">78 Inch X
                            48 Inch
                        </option>
                        <option value="14560" data-mrp="14560.00" data-offer="8736.00" data-l="72" data-w="60">72 Inch X
                            60 Inch
                        </option>
                        <option value="14977" data-mrp="14977.00" data-offer="8986.00" data-l="75" data-w="60">75 Inch X
                            60 Inch
                        </option>
                        <option value="15394" data-mrp="15394.00" data-offer="9236.00" data-l="78" data-w="60">78 Inch X
                            60 Inch
                        </option>
                        <option value="15988" data-mrp="15988.00" data-offer="9592.00" data-l="72" data-w="66">72 Inch X
                            66 Inch
                        </option>
                        <option value="16445" data-mrp="16445.00" data-offer="9867.00" data-l="75" data-w="66">75 Inch X
                            66 Inch
                        </option>
                        <option value="16906" data-mrp="16906.00" data-offer="10143.00" data-l="78" data-w="66">78 Inch
                            X 66 Inch
                        </option>
                        <option value="17259" data-mrp="17259.00" data-offer="10355.00" data-l="72" data-w="72">72 Inch
                            X 72 Inch
                        </option>
                        <option value="17758" data-mrp="17758.00" data-offer="10654.00" data-l="75" data-w="72">75 Inch
                            X 72 Inch
                        </option>
                        <option value="18250" data-mrp="18250.00" data-offer="10950.00" data-l="78" data-w="72">78 Inch
                            X 72 Inch
                        </option>
                        <option value="19908" data-mrp="19908.00" data-offer="11944.00" data-l="84" data-w="72">84 Inch
                            X 72 Inch
                        </option>
                        <option value="21310" data-mrp="21310.00" data-offer="12786.00" data-l="84" data-w="78">84 Inch
                            X 78 Inch
                        </option>
                        <option value="22713" data-mrp="22713.00" data-offer="13627.00" data-l="84" data-w="84">84 Inch
                            X 84 Inch
                        </option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="customLength">Length (inches)</label>
                    <input type="text" class="form-control w-25" id="customLength" oninput="validateCustomInput(this)"
                        placeholder="Enter Length">
                </div>
                <div class="form-group mt-2">
                    <label for="customWidth">Width (inches)</label>
                    <input type="text" class="form-control w-25" id="customWidth" oninput="validateCustomInput(this)"
                        placeholder="Enter Width">
                </div>
                <button id="calculateButton" class="btn btn-primary mt-2" onclick="calculateCustomPrice()">Calculate
                    Price</button>

            </div>

            <div class="form-group row mt-2">
                <div class="form-group col-md-2">
                    <label class="mb-2">Mattress Thickness</label>
                    <select class="form-control">
                        <option value="4">4 Inch</option>
                        <option value="6">6 Inch</option>
                        <option value="8">8 Inch</option>
                        <option value="10">10 Inch</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label class="mb-2">Quantity</label>
                    <div class="quantity-box">
                        <button class="btn btn-primary quantity-btn" onclick="decreaseQuantity()">-</button>
                        <input type="text" class="form-control ms-1 me-1 quantity-input" value="1" readonly>
                        <button class="btn btn-primary quantity-btn" onclick="increaseQuantity()">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Make sure to include the correct versions of Bootstrap and jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

        <script>
            // Initially show div1
            document.getElementById('div1').classList.remove('hide');

            function showDiv(divNumber) {
                // Hide all divs
                for (let i = 1; i <= 5; i++) {
                    document.getElementById('div' + i).classList.add('hide');
                }

                // Show the selected div
                document.getElementById('div' + divNumber).classList.remove('hide');
            }


            // Update Price based on selected option
            function updatePrice(selectElement) {
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var mrp = selectedOption.getAttribute('data-mrp');
                var offer = selectedOption.getAttribute('data-offer');

                // Update Total Price
                document.getElementById('totalPrice').innerText = parseFloat(mrp).toFixed(2);

                // Update Offer Price
                document.getElementById('offerPrice').innerText = parseFloat(offer).toFixed(2);
            }


            // Increase Quantity
            function increaseQuantity() {
                var quantityInput = document.querySelector('.quantity-input');
                quantityInput.value = parseInt(quantityInput.value) + 1;
            }

            function decreaseQuantity() {
                var quantityInput = document.querySelector('.quantity-input');
                if (parseInt(quantityInput.value) > 1) {
                    quantityInput.value = parseInt(quantityInput.value) - 1;
                }
            }


            // Find the custom price

            // ... (previous code)

            // Find the custom price
            function calculateCustomPrice() {
                var customLength = parseFloat($("#customLength").val()) || 0;
                var customWidth = parseFloat($("#customWidth").val()) || 0;

                // Validate custom length and width
                if (!isValidNumericInput(customLength) || !isValidNumericInput(customWidth)) {
                    alert("Please enter valid numeric values for length and width.");
                    return;
                }

                // Validate custom length range
                if (customLength < 70 || customLength > 85) {
                    alert("Length must be between 70 and 85 inches.");
                    return;
                }

                // Validate custom width range
                if (customWidth < 28 || customWidth > 85) {
                    alert("Width must be between 28 and 85 inches.");
                    return;
                }

                // Continue with finding the nearest option and displaying the price
                var nearestOption = findNearestOption(customLength, customWidth);

                if (nearestOption) {
                    var mrp = parseFloat(nearestOption.data("mrp")) || 0;
                    var offer = parseFloat(nearestOption.data("offer")) || 0;

                    displayTotalPrice(mrp, offer);
                } else {
                    console.log("No matching option found for the given dimensions.");
                }
            }

            // ... (remaining code)

            // Valid input
            function isValidNumericInput(inputValue) {
                return !isNaN(inputValue) && inputValue >= 0 && inputValue.toString() === inputValue.toString().replace(/[^0-9.]/g, '');
            }


            function findNearestOption(length, width) {
                var options = $("#customDropdown option");
                var nearestOption = null;
                var minDifference = Number.MAX_VALUE;

                options.each(function () {
                    var option = $(this);
                    var optionLength = parseFloat(option.attr('data-l')) || 0;
                    var optionWidth = parseFloat(option.attr('data-w')) || 0;
                    var difference = Math.abs(length - optionLength) + Math.abs(width - optionWidth);

                    if (difference < minDifference) {
                        minDifference = difference;
                        nearestOption = option;
                    }
                });

                return nearestOption;
            }

            function displayTotalPrice(mrp, offer) {
                $("#totalPrice").text(mrp.toFixed(2));
                $("#offerPrice").text(mrp.toFixed(2));
            }


        </script>
    </body>

</html>