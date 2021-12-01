<div class="row" style="margin-bottom: 25px;">
    <div class="col-12">
        <input type="text" id="txtcari" class="form-control" placeholder="Keyword Berupa Judul, Pemain dan Sinopsis" onkeyup="ambildatafilm()" autocomplete="off"/>
    </div>
</div>
<div class="row" id="blokfilm"></div>
<div class="modal fade" role="dialog" id="modaldetail">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h5 class="modal-title" style="font-size: 20px;">Detail Film</h5>
            </div>
            <div class="modal-body" id="blokdetail"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#page_header_title").html('<i class="material-icons">radio_button_checked</i> Data Film');
    $(".mnsidebar").removeClass("active");
    $("#mndata").addClass("active");
    function ambildatafilm(){
        let keyword = $("#txtcari").val();
        if(keyword == ""){
            $("#blokfilm").html("<div class='col-12' style='text-align: center;'><h2>Silahkan Isi Keyword Filter Terlebih Dahulu</h2></div>");
            return;
        }
        let hasil = "";
        let x;
        for(x in datafilm){
            let cv = datafilm[x].Cover;
            let jd = datafilm[x].Judul;
            let pm = datafilm[x].data1[0].Pemain;
            let th = datafilm[x].data2[0];
            let rt = datafilm[x].data2[1];
            let sn = datafilm[x].data1[0].Sinopsis;
            let dr = datafilm[x].durasI;
            if(jd.toLowerCase().indexOf(keyword) > -1 || pm.toLowerCase().indexOf(keyword) > -1 || sn.toLowerCase().indexOf(keyword) > -1){
                hasil += "<img src='"+ cv +"' data-judul='"+ jd +"' data-pemain='"+ pm +"' data-tahun='"+ th +"' data-rating='"+ rt +"' data-sinopsis='"+ sn +"' data-durasi='"+ dr +"' class='col-md-2' style='margin-bottom: 15px;' onclick='tampildetail(this)'>";
            }
        }
        $("#blokfilm").html(hasil);
    }
    ambildatafilm();
    function tampildetail(el){
        let judul = $(el).data("judul");
        let pemain = $(el).data("pemain");
        let tahun = $(el).data("tahun");
        let rating = $(el).data("rating");
        let sinopsis = $(el).data("sinopsis");
        let durasi = $(el).data("durasi");
        $("#blokdetail").html("<p style='font-size: 20px;'><b>Judul:</b><br>" + judul + "<p style='font-size: 20px;'><b>Pemain:</b><br>" + pemain + "<p style='font-size: 20px;'><b>Tahun:</b><br>" + tahun + "<p style='font-size: 20px;'><b>Rating:</b><br>" + rating + "<p style='font-size: 20px;'><b>Durasi:</b><br>" + durasi + "<p style='font-size: 20px; text-align: justify'><b>Sinopsis:</b><br>" + sinopsis);
        $("#modaldetail").modal("show");
    }
</script>