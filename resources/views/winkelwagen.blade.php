@extends('layouts.default')

@section('content')
    <div class="container">
        <div style=margin-top:90px>
            <h2>Winkelwagentje</h2>
        </div>
        <div class="container">
            <div class="row">
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Beschrijving</th>
                        <th>Aantal</th>
                        <th>Prijs</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-lg-2"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="100"></td>
                        <td class="col-lg-2"><p class="cartCenter">Varkensoren 10 stuks</p></td>
                        <td class="col-lg-1"><select id="amount" class="cartDropdown form-control">
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select></td>
                        <td><p class="cartCenter">&euro;8,00</p></td>
                    </tr>
                    <tr>
                        <td class="col-lg-2"><img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="100"></td>
                        <td class="col-lg-2"><p class="cartCenter">Varkensoren 10 stuks</p></td>
                        <td class="col-lg-1"><select id="amount" class="cartDropdown form-control">
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select></td>
                        <td class="col-lg-2"><p class="cartCenter">&euro;8,00</p></td>
                    </tr>
                    </tbody>
                </table>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 0%"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-7">Totaal artikelen</div>
                    <div class="col-lg-1">&euro;16,00</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-7">Verzendkosten</div>
                    <div class="col-lg-1">&euro;5,00</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-7"><b>Totaal</b></div>
                    <div class="col-lg-1">&euro;21,00</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-7">
                    <a href="#" class="btn btn-raised btn-primary">Bestellen</a>
                    <a href="#" class="btn btn-raised btn-danger">Annuleren</a>
                </div>
            </div>
        </div>
        @include('static.footer')
    </div>
@endsection
