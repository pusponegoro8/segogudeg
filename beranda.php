<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-4">
        <div class="card card-shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <span class="bg-warning text-center pvr-icon-box">
                            <i class="icon-people text-light f-s-24"></i>
                        </span>
                    </div>
                    <div class="col-9">
                        <h6 class="mt-1 mb-0">Jumlah Film</h6>
                        <p class="mb-0" id="b1">???</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-4">
        <div class="card card-shadow ">
            <div class="card-body ">
                <div class="row">
                    <div class="col-3">
                        <span class="bg-info text-center pvr-icon-box">
                            <i class="icon-basket-loaded text-light f-s-24"></i>
                        </span>
                    </div>
                    <div class="col-9">
                        <h6 class="mt-1 mb-0">Rilis Film Dari 2015 sd. 2021</h6>
                        <p class="mb-0" id="b2">???</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-4">
        <div class="card card-shadow">
            <div class="card-body ">
                <div class="row">
                    <div class="col-3">
                        <span class="bg-success text-center pvr-icon-box">
                            <i class="icon-handbag text-light f-s-24"></i>
                        </span>
                    </div>
                    <div class="col-9">
                        <h6 class="mt-1 mb-0">Rilis Film Dari 2010 sd. 2014</h6>
                        <p class="mb-0" id="b3">???</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-4">
        <div class="card card-shadow">
            <div class="card-body ">
                <div class="row">
                    <div class="col-3">
                        <span class="bg-danger text-center pvr-icon-box">
                            <i class="icon-trophy text-light f-s-24"></i>
                        </span>
                    </div>
                    <div class="col-9">
                        <h6 class="mt-1 mb-0">Rilis Film dibawah 2010</h6>
                        <p class="mb-0" id="b4">???</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#page_header_title").html('<i class="material-icons">radio_button_checked</i> Dashboard');
    $(".mnsidebar").removeClass("active");
    $("#mnberanda").addClass("active");
    function ambildata(){
        let hasil = "";
        let x;
        let x1 = 0;
        let x2 = 0;
        let x3 = 0;
        for(x in datafilm){
            let th = datafilm[x].data2[0];
            if(parseInt(th) >= 2015){
                x1++;
            }else{
                if(parseInt(th) >= 2010){
                    x2++;
                }else{
                    x3++;
                }
            }
        }
        $("#b1").html(parseInt(x) + 1);
        $("#b2").html(x1++);
        $("#b3").html(x2++);
        $("#b4").html(x3++);
        $("#blokfilm").html(hasil);
    }
    ambildata();
</script>