  $("#calculatForm :input").change(function() {
        var sum = 0;
        var total_amount = 0;
        var other_amount = 0;
        var cashBack = 0;
        var itemAdded = 0;

        $(".amount-input").each(function(){
            if(parseInt($(this).val())){
                itemAdded++;
                total_amount += parseInt($(this).val());
            }
        });

        var other_amount = parseInt($(".other-input").val());
        var other_cashback = parseInt(other_amount*0.05);
        var monthly_total = parseInt(total_amount + other_amount);
       
        
        cashBack = (total_amount*0.1);
        if(itemAdded>2){
            cashBack+=1;
        }

        var cashback_total = parseInt(cashBack+other_cashback);

        $(".amount").text(parseInt(monthly_total));
        $(".cashback_1").text(parseInt(cashBack));
        $(".cashback_2").text(other_cashback);
        $(".cashback_total").text(cashback_total);
        

    });
    
