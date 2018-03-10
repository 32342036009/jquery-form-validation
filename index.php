<!doctype html>
<html lang="en">
<head>
    <title>jQuery Form Validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
<body>

<div class="container" style="padding-top: 50px">
<div class="col-sm-6">
    <h2>jQuery Form Validation</h2>
    <form action="" id="form">
        <div class="form-group">
            <label class="control-label" for="text1">Required</label>
            <input type="text" id="text1" class="form-control" name="text1">
            <div class="help-block">Initial Help Block</div>
        </div>
        <div class="form-group">
            <label class="control-label" for="text2">E-Mail</label>
            <input type="text" id="text2" class="form-control" name="text2">
        </div>
        <div class="form-group">
            <label class="control-label" for="text3">Min Length</label>
            <input type="text" id="text3" class="form-control" name="text3">
        </div>
        <div class="form-group">
            <label class="control-label" for="text4">Max Length</label>
            <input type="text" id="text4" class="form-control" name="text4">
        </div>
                <div class="form-group">
            <div class="checkbox">
                <label for="text7">
                    <input type="checkbox" name="text7" id="text7" value="">
                    Checkbox 1
                </label>
            </div>
            <div class="checkbox">
                <label for="text75">
                    <input type="checkbox" name="text7" id="text75" value="">
                    Checkbox 2
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="radio">
                <label for="text8">
                    <input type="radio" name="text8" id="text8" value="">
                    Radio 1
                </label>
            </div>
            <div class="radio">
                <label for="text85">
                    <input type="radio" name="text8" id="text85" value="">
                    Radio 2
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="text9">Select Field</label>
            <select id="text9" class="form-control" name="text9">
                <option value="">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="text10">Date Format</label>
            <input type="text" id="text10" class="form-control" name="text10" placeholder="YYYY-MM-DD | MM.DD.YYYY | MM DD YYYY">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit Form</button>
        </div>
        <div class="form-group">
            <button type="reset" id="reset" class="btn btn-default">Reset Fields</button>
        </div>
    </form>
</div>
</div>
<script src="assets/jquery-3.2.1.slim.min.js"></script>
<script src="assets/popper.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script src="assets/validator.js"></script>
<script src="assets/script.js"></script>

</body>
</html>
