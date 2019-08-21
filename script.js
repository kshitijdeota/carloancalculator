jQuery(document).ready(function ($) {

    if($('.calculator')[0]) {
        // Default inputs
        $(".validate").hide();
        $(".avgrate").hide();
        $(".avgrate-new").eq(0).show();
        rate = $(".avgrate-new").eq(0).attr('data');
        $(".interest").val(rate);
        $(".price").eq(0).show();
        dothemath();
    }

    // New Car ~ Used Car - affects credit score legend, price, interest rate.
    $(".radio").on('change', function() {
        $(".avgrate").hide();
        $(".price").hide();
        if ( 0 == $(this).val() ) {
            $(".price-new").eq( $(".brand-select").val() ).show();
            $(".avgrate-new").eq( $(".crscore-select").val() ).show();
            rate = $(".avgrate-new").eq( $(".crscore-select").val() ).attr('data');
        } else {
            $(".price-used").eq( $(".brand-select").val() ).show();
            $(".avgrate-used").eq( $(".crscore-select").val() ).show();
            rate = $(".avgrate-used").eq( $(".crscore-select").val() ).attr('data');
        }
        intRate = parseFloat(rate);
        $(".interest").val(rate);
        dothemath();
    });

    // Credit Score - affects interest rate, credit score legend.
    $(".crscore-select").on('change', function() {
        $(".avgrate").hide();
        if ( 0 == $(".radio:checked").val() ) {
            $(".avgrate-new").eq( $(".crscore-select").val() ).show();
            rate = $(".avgrate-new").eq( $(".crscore-select").val() ).attr('data');
        } else {
            $(".avgrate-used").eq( $(".crscore-select").val() ).show();
            rate = $(".avgrate-used").eq( $(".crscore-select").val() ).attr('data');
        }
        intRate = parseFloat(rate);
        $(".interest").val(rate);
        dothemath();
    });

    // Brand - affects car price
    $(".brand-select").on("change", function() {
        $(".price").hide();
        ( 0 == $(".radio:checked").val()) ? $(".price-new").eq( $(".brand-select").val() ).show() : $(".price-used").eq( $(".brand-select").val() ).show();
        dothemath();
    });
    $(".price, .tradein, .interest, .months").on("blur keyup paste input", function() {
        dothemath();
    });

    $(".price, .tradein").number(true, 2);

    // Validations
    $(".price").on("blur keyup paste input", function() {
        $(this).val() > 999999 ? $(".price-validate").show() : $(".validate").hide();
    });

    $(".tradein").on("blur keyup paste input", function() {
        (($(this).val() / $(".price").val()) * 100) < 20 ? $(".tradein-validate").show() : $(".validate").hide();
    });

    $(".months").on("blur keyup paste input", function() {
        var months = $(".months").val();
        isNaN(months) ? months = 0 : months;
        months > 60 ? $(".months-validate").show() : $(".validate").hide();
    });

    function dothemath() {
        monthlyPayment();
        totalPayment();
        totalInterest();
    }

    // Calculate monthly payment
    function monthlyPayment() {
        interestInput = parseFloat( $(".interest").val() );
        months = parseFloat( $(".months").val() ); // number of months
        interest = (interestInput / 100) / 12; // effective interest rate per month
        discountFactor = ( ( Math.pow((1 + interest), months) ) - 1 ) / ( ( Math.pow((1 + interest), months) ) * interest ); // discount factor
        principal = $(".price:visible").val(); // car price ~ principal amount
        tradein = $(".tradein").val(); // trade-in
        isNaN(tradein) ? tradein = 0 : tradein;
        paymentPerMonth = ((principal - tradein) / discountFactor).toFixed(2); // payment per month
        isNaN(paymentPerMonth) ? paymentPerMonth = 0 : paymentPerMonth = $.number( paymentPerMonth, 2 );
        return $(".monthlypay").text(paymentPerMonth); // display payment per month
    }

    // Calculate total amount paid
    function totalPayment() {
        var months = parseFloat( $(".months").val() ); // number of months
        var paymentPerMonth = Number( ($(".monthlypay").text()).replace(/[^0-9.-]+/g,"") );
        var totalPayment = (months * paymentPerMonth).toFixed(2);
        isNaN(totalPayment) ? totalPayment = 0 : totalPayment = $.number(totalPayment, 2);
        $(".amtpaid").text(totalPayment); // display total amount paid
    }

    // Calculate total interest paid
    function totalInterest() {
        var months = parseFloat( $(".months").val() ); // number of months
        var paymentPerMonth = Number( $(".monthlypay").text().replace(/[^0-9.-]+/g,"") ); // amount paid per month
        var totalPayment = (months * paymentPerMonth).toFixed(2); // total amount paid
        var principal = parseFloat( $(".price:visible").val().replace(/\,/g,'') ); // car price ~ principal amount
        var tradein = parseFloat(( $(".tradein").val() ).replace(/\,/g,'')); // tradein amount
        isNaN(tradein) ? tradein = 0 : tradein;
        var interestPaid = (totalPayment - (principal - tradein)).toFixed(2); // total paid - (price - tradein)
        isNaN(interestPaid) ? interestPaid = 0 : interestPaid = $.number( interestPaid, 2 );
        return $(".intpaid").text(interestPaid); // display total interest paid
    }

});

