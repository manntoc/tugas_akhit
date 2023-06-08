@extends('layout.home')

@section('title', 'FAQ')

@section('content')
<!-- FAQ -->
<section class="section-wrap faq">
    <div class="container">
        <div class="row">

            <div class="col-sm-9">
                <h2 class="mb-20"><small>tentang pengiriman</small></h2>

                <div class="panel-group accordion mb-50" id="accordion-1">
                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1" class="minus">bagaimana melacak pengiriman saya<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                melalui J&T
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2" class="plus">di mana saya dapat menemukan nomor pelacakan?<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                coba takok J&T
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3" class="plus">metode pengiriman apa yang dapat saya gunakan?<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                gae pesawat, helikopter yo iso
                            </div>
                        </div>
                    </div>
                </div> <!-- end accordion -->


                <h2 class="mb-20 mt-80"><small>tentang pembayaran</small></h2>

                <div class="panel-group accordion mb-50" id="accordion-2">
                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-4" class="minus">apa saja metode pembayarannya?<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-4" class="panel-collapse collapse in">
                            <div class="panel-body">
                                ada bank ambon sama bank nieco
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-5" class="plus">bagaimana cara membayar melalui kartu kredit?<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                yo karek transfer
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-6" class="plus">menerima kartu debit apa aja?<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-6" class="panel-collapse collapse">
                            <div class="panel-body">
                                opo ae penting iso ditarik dadi duek
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-7" class="plus">bagaimana cara membayar melalui paypal?<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-7" class="panel-collapse collapse">
                            <div class="panel-body">
                                yo gaeroh takok tok ra tuku
                            </div>
                        </div>
                    </div>

                </div> <!-- end accordion -->

            </div> <!-- end col -->

            <aside class="sidebar col-sm-3">
                <div class="contact-item">
                    <h6>Tentang</h6>
                    <ul class="list-dividers">
                        <li>
                            <a href="#">Pengiriman</a>
                        </li>
                        <li>
                            <a href="#">Pembayaran</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                        <li>
                            <a href="#">Pertanyaan</a>
                        </li>
                    </ul>
                </div>

                <div class="contact-item">
                    <h6>Informasi</h6>
                    <ul>
                        <li>
                            <i class="fa fa-envelope"></i><a>kaftapus@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><span>+6281330059485</span>
                        </li>
                        <li>
                            <i class="fa fa-skype"></i><span>jajanin.skuy</span>
                        </li>
                    </ul>
                </div>

            </aside> <!-- end col -->

        </div>
    </div>
</section> <!-- end faq -->
@endsection
