<form>
    <div class="form-group row">
        <label for="Informe sua idade" class="col-4 col-form-label">Idade</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                </div>
                <input id="Informe sua idade" name="Informe sua idade" type="text" class="form-control"
                    required="required">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nome" class="col-4 col-form-label">Nome</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-font"></i>
                    </div>
                </div>
                <input id="nome" name="nome" placeholder="informe seu nome" type="text" class="form-control"
                    aria-describedby="nomeHelpBlock">
            </div>
            <span id="nomeHelpBlock" class="form-text text-muted">Informe seu nome completo</span>
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Text Field</label>
        <div class="col-8">
            <input id="text1" name="text1" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Sexo</label>
        <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="masc"
                    required="required">
                <label for="radio_0" class="custom-control-label">Masculinoi</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="fe"
                    required="required">
                <label for="radio_1" class="custom-control-label">Feminino</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>