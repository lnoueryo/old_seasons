@extends('layouts.front2')

@section('content')
<link href="{{ asset('css/PC/contact.css') }}" rel="stylesheet">
<link href="{{ asset('css/media/contact.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="justify-content-center">
                <div class="card">
                    <div class="card-header menu">
                        <h1>コンセプト</h1>
                    </div>
                    <div class="col-md-11 mt-3">
                        <article>
                            <div id="page-content" class="abc">
                            <p class="large paragraph">お問い合わせは、こちらで受付しております。</p>
                            <h3 class="paragraph">電話・FAX</h3>
                            <dl id="sp-definition-list-5" class="sp-part-top sp-definition-list">
                              <dt>TEL
                              </dt><dd>092-775-1821（平日 10:00～20:00）火曜を除く
                              </dd><dt>FAX
                              </dt><dd>092-775-1821</dd></dl>
                            <h3 class="paragraph">お問い合わせフォーム</h3>
                            <p class="paragraph">お問い合わせは、下記にて承っております。</p>
                            <p class="paragraph">*は必須項目です。</p>

                            <form id="sp-form-1" action="" method="POST" name="sp_form" class="sp-part-top sp-form">
                                <table class="contact-form text-center">
                                <tbody>
                                    <tr>
                                        <th>お問い合わせ内容 *</th>
                                        <td><textarea class="form-control" rows="6" name="message" required="required"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>お名前（漢字）*</th>
                                        <td><input class="form-control" type="text" name="name-kanji" required="required" size="20"></td>
                                    </tr>
                                    <tr>
                                    <th>お名前（フリガナ）*</th>
                                    <td><input class="form-control" type="text" name="kana" required="required"></td>
                                    </tr>
                                    <tr>
                                    <th>E-Mail*</th>
                                    <td><input class="form-control" type="text" name="email" required="required"></td>
                                    </tr>
                                    <tr>
                                    <th>電話番号（半角）*</th>
                                    <td><input class="form-control" type="text" name="tel" required="required"></td>
                                    </tr>
                                    <tr>
                                    <th>FAX番号（半角）</th>
                                    <td><input class="form-control" type="text" name="fax"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <input class="btn float-right sub-btn mb-3" type="submit" value="送信">
                        </form>
                    </div>
                </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
