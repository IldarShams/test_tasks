<html>
    <head></head>
    <body>
        
        <input class="operand1"></input>
        <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>
        <input class="operand2"></input>
        <button class="but">=</button>
        <span class="res"></span>
    </body>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script>
        $(".but").on("click", ()=>
        {
            data_ = {
                "oper1": $(".operand1").val(),
                "oper2": $(".operand2").val(),
                "operation": $("#operation option:selected").val()
            };
            console.log(data_);
            $.ajax({
                url: 'myFunctions.php',
                type: 'post',
                data: data_,
                success: function(response) {
                    $(".res").text(response);
                }
            });
        });
    </script>
<html>