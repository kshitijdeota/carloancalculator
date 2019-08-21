<div class="calculator">

    <div class="grid">
        <div class="input-form">
            <div class="row">
                <label for="crscore-select">What's your credit score?</label>
                <div class="select">
                    <select name="crscore-select" class="crscore-select" tab="0">
                        <option class="crscore" value="0" selected>Super Prime (781-850)</option>
                        <option class="crscore" value="1">Prime (661-780)</option>
                        <option class="crscore" value="2">Nonprime (601-660)</option>
                        <option class="crscore" value="3">Subprime (501-600)</option>
                        <option class="crscore" value="4">Deep Subprime (300-500)</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <label for="brand-select">What brand are you looking for?</label>
                <div class="select">
                    <select name="brand-select" class="brand-select">
                        <option class="brand" value="0" selected>Ferrari</option>
                        <option class="brand" value="1">Porsche</option>
                        <option class="brand" value="2">Lamborghini</option>
                        <option class="brand" value="3">Maserati</option>
                        <option class="brand" value="4">Bugatti</option>
                        <option class="brand" value="5">Aston Martin</option>
                        <option class="brand" value="6">McLaren</option>
                        <option class="brand" value="7">Mitsubishi</option>
                        <option class="brand" value="8">Nissan</option>
                    </select>
                </div>
            </div>

            <div class="condition row">
                <input name="radio" type="radio" class="radio" id="new" value="0" checked><label for="new">New Car</label>
                <input name="radio" type="radio" class="radio" id="used" value="1"><label for="used">Used Car</label>
            </div>

            <!-- AVG RATES FOR NEW CARS -->
            <p class="avgrate avgrate-new" style="display: none" data="3.12">Based on your score, the average rate is 3%.</p>
            <p class="avgrate avgrate-new" style="display: none" data="4.56">Based on your score, the average rate is 4.56%.</p>
            <p class="avgrate avgrate-new" style="display: none" data="7.52">Based on your score, the average rate is 7.52%.</p>
            <p class="avgrate avgrate-new" style="display: none" data="11.89">Based on your score, the average rate is 11.89%.</p>
            <p class="avgrate avgrate-new" style="display: none" data="14.41">Based on your score, the average rate is 14.41%. Consider buying an inexpensive used car and refinancing in 6-12 months.</p>

            <!-- AVG RATES FOR USED CARS -->
            <p class="avgrate avgrate-used" style="display: none" data="4.34">Based on your score, the average rate is 4.34%.</p>
            <p class="avgrate avgrate-used" style="display: none" data="5.97">Based on your score, the average rate is 5.97%.</p>
            <p class="avgrate avgrate-used" style="display: none" data="10.34">Based on your score, the average rate is 10.34%.</p>
            <p class="avgrate avgrate-used" style="display: none" data="16.14">Based on your score, the average rate is 16.14%.</p>
            <p class="avgrate avgrate-used" style="display: none" data="19.98">Based on your score, the average rate is 19.98%. Consider buying an inexpensive used car and refinancing in 6-12 months.</p>


            <div class="row">
                <!-- // New Car Prices - should match Car Brands -->
                <label for="price">Car price ($)</label>
                <input name="price" type="text" class="price price-new" style="display: none;" value="100000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="206000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="602000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="515000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="623000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="223000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="270000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="823000">
                <input name="price" type="text" class="price price-new" style="display: none;" value="915000">

                <!-- // Used Car Prices - should match Car Brands -->
                <input name="price" type="text" class="price price-used" style="display: none;" value="60000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="26000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="62000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="55000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="63000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="23000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="20000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="82000">
                <input name="price" type="text" class="price price-used" style="display: none;" value="61000">
                <sub>After negotiations</sub>
                <p class="validate price-validate">Please enter a valid number</p>
            </div>

            <div class="row">
                <label for="tradein">Trade-in / down payment ($)</label>
                <input name="tradein" type="text" class="tradein" value="4000">
                <sub>Your trade-in can be all or part of a down payment</sub>
                <p class="validate tradein-validate">AmericanCarLoan recommends putting at least 20% down, in any combination of trade-in and payment.</p>
            </div>

            <div class="row">
                <label for="interest">Interest rate (%)</label>
                <input name="interest" type="number" class="interest" value="6">
                <sub>A higher credit score means lower interest rates</sub>
            </div>

            <div class="row">
                <label for="months">Number of months</label>
                <input name="months" type="number" class="months" value="36">
                <sub>Suggested max: 36 months for used cars, 60 for new</sub>
                <p class="validate months-validate">Loan terms longer than 60 months can put you "underwater" — meaning you owe more to the bank than the car is worth.</p>
            </div>

        </div><!-- .input-form -->

        <div class="payment-details">
            <h2>Payment details</h2>

            <div class="row">
                <p>Monthly payment</p>
                <p>$<span class="monthlypay">475.95</span></p>
                <sub>(Before taxes & fees)</sub>
            </div>

            <div class="row">
                <p>Total amount paid</p>
                <p>$<span class="amtpaid">17134.20</span></p>
                <sub>(Over the life of the loan)</sub>
            </div>

            <div class="row">
                <p>Total interest paid</p>
                <p>$<span class="intpaid">1134.20</span></p>
            </div>

        </div><!-- .payment-details -->
    </div><!-- .grid -->

</div><!-- .calculator -->