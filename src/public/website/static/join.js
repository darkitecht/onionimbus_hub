var DW;
$(document).ready(function() {
    DW = new DiceWare();
    DW.load('/static/resonant/diceware/diceware.wordlist.asc', function() {
        $("#generate_password").click(function() {
            var _newPW = DW.getWords(8).join(' ');
            if (confirm("Use this as your new password?\n" + _newPW + "\n\n(If 'Yes', write it down then press OK.)")) {
                $("#txtNewPassword").val(_newPW);
            }
        });
    });
});

$("#txtUsername").on('change', function() {
    $.post("/join/unique_check", function(result) {
        
    });
});
