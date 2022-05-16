$(function(){
    const myAjax=new MyAjax;
    let ingatlanok =[];
    let kategoria=[];
    const szuloelem = $("#szulo");
    const sablonElem = $("#gyerek");
    let apivegpont="/api/ingatlan";
    let apivegpontKategoriak="/api/kategoriak";
    let akt="";


    myAjax.getAdat(apivegpont,ingatlanok,ingatlanokMegjelenitese);

    function ingatlanokMegjelenitese(){
        szuloelem.empty();
        sablonElem.show();
            ingatlanok.forEach(function(adat) {
                let ujElem = sablonElem.clone().appendTo(szuloelem);
                let ujTerem = new Ingatlanok(ujElem,adat);
            });
    }

    myAjax.getAdat(apivegpontKategoriak ,kategoria, KategoriaBetolt);

    function KategoriaBetolt(){
        const szuloelem = $("#ingatlanKategoriak");
        let ujMufaj;
        kategoria.forEach(function(adat) {
            ujMufaj = new Kategoriak(szuloelem,adat);
        });
    }

    $(".kuldes").on("click", ()=>{
        let ujIngatlan={};
        ujIngatlan.kategoria=$("#ingatlanKategoriak").val();
        ujIngatlan.leiras=$("#fleiras").val();
        ujIngatlan.hirdetesDatuma=$("#hirdetesDatuma").val();
        if($("#tehermentesIngatlan").prop('checked')==false){
            ujIngatlan.tehermentes=0;
        }
        else{
            ujIngatlan.tehermentes=1;
        }
        
        ujIngatlan.ar=1;
        ujIngatlan.kepUrl=$("#kep").val();
        console.log(ujIngatlan);
        console.log(apivegpont);
        myAjax.postAdat(apivegpont,ujIngatlan);
        myAjax.getAdat(apivegpont,ingatlanok,ingatlanokMegjelenitese);
        //$(".kuldes").css("display", "inline");
        //$(".modosit").css("display", "none");
    });

    $(window).on("torles",(event)=>{
        myAjax.deletAdat(apivegpont,event.detail.adat.id,sikeresTorles,event.detail.szuloelem);
    });

    function sikeresTorles(sor){
        $(sor).remove();
    }

    $(window).on("mosdositas",(event)=>{
        $("#tehermentesIngatlan").prop('checked',false);
        $("#id").val(event.detail.adat.id);
        console.log(event.detail.adat.kategoria.nev);
        $("#ingatlanKategoriak").val(event.detail.adat.kategoria.id);
        $("#hirdetesDatuma").val(event.detail.adat.hirdetesDatuma);
        $("#fleiras").val(event.detail.adat.leiras);
        if(event.detail.adat.tehermentes==0){
            $("#tehermentesIngatlan").prop('checked',false);
        }else{
            $("#tehermentesIngatlan").prop('checked',true);
        }
        
        $("#kep").val(event.detail.adat.kepUrl);
        // $(".felvitel").css("display", "none");
        // $(".modosit").css("display", "inline");
    });

    $(".modosit").on("click", ()=>{
        let mosoitottIngatlan={};
        mosoitottIngatlan.id=$("#id").val();
        mosoitottIngatlan.kategoria=$("#ingatlanKategoriak").val();
        mosoitottIngatlan.leiras=$("#fleiras").val();
        mosoitottIngatlan.hirdetesDatuma=$("#hirdetesDatuma").val();
        if($("#tehermentesIngatlan").prop('checked')==false){
            mosoitottIngatlan.tehermentes=0;
        }
        else{
            mosoitottIngatlan.tehermentes=1;
        }
        
        mosoitottIngatlan.ar=1;
        mosoitottIngatlan.kepUrl=$("#kep").val();
        console.log(mosoitottIngatlan.id);
        console.log(mosoitottIngatlan);
        myAjax.putAdat(apivegpont,mosoitottIngatlan,mosoitottIngatlan.id);
        myAjax.getAdat(apivegpont,ingatlanok,ingatlanokMegjelenitese);
        //$(".felvitel").css("display", "inline");
        //$(".modosit").css("display", "none");
    });

    $(window).on("erdekel",(event)=>{
        alert(event.detail.adat.leiras+"\n"+event.detail.adat.id);
    });
});