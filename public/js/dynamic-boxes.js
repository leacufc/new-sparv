$(function () {

    // note plugins setup
    $.noty.defaults.theme = 'bootstrapTheme';
    $.noty.defaults.timeout = 5000;
    $.noty.defaults.progressBar = true;

    var $mensagemElement = "<div class='row message-item' style='border-bottom: 1px solid #f5f5f5; margin-top: 15px;'>" +
        "                    <div class='col-sm-8'>" +
        "                        <input name='mensagemId[]' type='hidden'>" +
        "                        <div class='form-group'>" +
        "                            <label>Mensagem</label>" +
        "                            <input name='mensagemTxt[]' type='text' class='form-control'>" +
        "                        </div>" +
        "                    </div>" +
        "                    <div class='col-sm-2'>" +
        "                        <div class='form-group'>" +
        "                            <label>Ordem</label>" +
        "                            <select name='mensagemOrdem[]' class='form-control'>" +
        "                                <option value='antes'>Antes</option>" +
        "                                <option value='depois'>Depois</option>" +
        "                            </select>" +
        "                        </div>" +
        "                    </div>" +
        "                    <div class='col-sm-1'>" +
        "                        <div class='form-group'>" +
        "                            <label>Pontos</label>" +
        "                            <select name='pontos' class='form-control'>" +
        "                                <option value='1'>1</option>" +
        "                                <option value='2'>2</option>" +
        "                                <option value='3'>3</option>" +
        "                                <option value='4'>4</option>" +
        "                                <option value='5'>5</option>" +
        "                                <option value='6'>6</option>" +
        "                                <option value='7'>7</option>" +
        "                                <option value='8'>8</option>" +
        "                                <option value='9'>9</option>" +
        "                                <option value='10'>10</option>" +
        "                                <option value='11'>11</option>" +
        "                                <option value='12'>12</option>" +
        "                                <option value='13'>13</option>" +
        "                            </select>" +
        "                        </div>" +
        "                    </div>" +
        "                    <div class='col-sm-1'>" +
        "                        <div class='form-group'>" +
        "                            <span class='btn btn-danger message-delete' style=\"margin-top: 1.7em;\">" +
        "                                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>" +
        "                            </span>" +
        "                        </div>" +
        "                    </div>" +
        "                </div>";

    function onMessageError(text, type) {
        noty({
            text: String(text),
            type: String(type)
        });
    };

    function onMessageDeleteClick() {
        if ($('.message-item').length !== 1) {
            $(this).parents('.message-item').hide('slow', function () {
                $(this).remove();
            });
        } else {
            onMessageError("Você deve ao menos ter uma <b>mensagem</b>", 'error');
        }
    }

    function onMessageAdd() {
        $('#message-list').append($mensagemElement);
        onActiveselectTwo();
        $('.message-delete').click(onMessageDeleteClick);
    };

    $('.message-add').click(onMessageAdd);

    onMessageAdd();

});