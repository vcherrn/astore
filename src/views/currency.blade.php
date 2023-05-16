<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
    <style>
        body{
            background-color: #d2d2d2;
        }
        form{
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 pt-5">
                <form action="{{ route('currency')}}" class="border rounded m-5 p-5" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="row">
                                <h4 class="col-md-7 ps-2 m-0">Current Currency</h4>
                               
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <select class="form-select" name='currency_from' aria-label="Default select example" required>
                                        <option value="" @if (Request::get('currency_from') == null) none @endif>Select Currency</option>
                                        <option value="RUB" @if (Request::get('currency_from') == 'RUB')? selected : none @endif>Российский рубль</option>
                                        <option value="EUR" @if (Request::get('currency_from') == 'EUR')? selected : none @endif>Euro</option>
                                        <option value="GBP" @if (Request::get('currency_from') == 'GBP')? selected : none @endif>Great Britain Pound</option>
                                        <option value="INR" @if (Request::get('currency_from') == 'INR')? selected : none @endif>India Rupee</option>
                                        <option value="JPY" @if (Request::get('currency_from') == 'JPY')? selected : none @endif>Japan Yen</option>
                                        <option value="USD" @if (Request::get('currency_from') == 'USD')? selected : none @endif>USA Dollar</option>

                                    </select>
                                </div>
                                <h4 class="col-md-2 text-center m-0 p-0">To</h4>
                                <div class="col-md-5 mb-3">
                                    <select class="form-select"  name='currency_to' aria-label="Default select example" required>
                                        <option value="" @if (Request::get('currency_to') == null) none @endif>Select Currency</option>
                                        <option value="RUB" @if (Request::get('currency_to') == 'RUB')? selected : none @endif>Российский рубль</option>
                                        <option value="EUR" @if (Request::get('currency_to') == 'EUR')? selected : none @endif>Euro</option>
                                        <option value="GBP" @if (Request::get('currency_to') == 'GBP')? selected : none @endif>Great Britain Pound</option>
                                        <option value="INR" @if (Request::get('currency_to') == 'INR')? selected : none @endif>India Rupee</option>
                                        <option value="JPY" @if (Request::get('currency_to') == 'JPY')? selected : none @endif>Japan Yen</option>
                                        <option value="USD" @if (Request::get('currency_to') == 'USD')? selected : none @endif>USA Dollar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="amount" value="{{ Request::get('amount') }}" name="amount" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" name='date' value="{{ Request::get('date') }}" id="date">
                                        <span class=" d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Converted Amount</label>
                                    <input type="number" class="form-control" value="{{ $converted }}" id="amount" name="amount" disabled>
                                </div>
                            </div>                              
                            <div class="col-md-12 d-flex justify-content-center mt-4">
                                <button type="submit" class="col-3 btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>      
    </div>
</body>
</html>