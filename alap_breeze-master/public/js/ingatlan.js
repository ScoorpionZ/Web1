class Ingatlanok{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;

        this.ingatlanId=this.szuloelem.children(".col").children(".id");
        this.ingatlanKategoria=this.szuloelem.children(".col").children(".kategoria");
        this.ingatlanLeiras=this.szuloelem.children(".col").children(".leiras");
        this.ingatlanDatum=this.szuloelem.children(".col").children(".datum");
        this.ingatlanTeher=this.szuloelem.children(".col").children(".teher");
        this.ingatlanKep=this.szuloelem.children(".col").children(".kep");

        this.torl=this.szuloelem.children(".col").children(".torles");
        this.mosdosit=this.szuloelem.children(".col").children(".modositas");
        this.erdekel=this.szuloelem.children(".col").children(".erdekel");
       
        
        this.adat=adat;
        this.tablaSorGeneralas();

        $(this.szuloelem.find('.torles')).on("click", ()=>{
            this.torles();
        });

       $(this.szuloelem.find('.modositas')).on("click", ()=>{
           this.mosdositas();
       });

       $(this.szuloelem.find('.erdekel')).on("click", ()=>{
            this.erdekels();
        });
    }

    torles(){
        let event = new CustomEvent("torles", {detail:this});
        window.dispatchEvent(event);
    }

    mosdositas(){  
        let event = new CustomEvent("mosdositas", {detail:this});
        window.dispatchEvent(event);
    }

    erdekels(){
        let event = new CustomEvent("erdekel", {detail:this});
        window.dispatchEvent(event);
    }

    tablaSorGeneralas(){
        this.ingatlanId.html(this.adat.kategoria.id);
        this.ingatlanKategoria.html(this.adat.kategoria.nev);
        this.ingatlanLeiras.html(this.adat.leiras);
        this.ingatlanDatum.html(this.adat.hirdetesDatuma);
        if(this.adat.tehermentes==1){
            this.ingatlanTeher.html("igen");
        }else{
            this.ingatlanTeher.html("Nem");
        }
        this.ingatlanKep.html("<img src="+this.adat.kepUrl+">");
    }

  
}

class Kategoriak{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.kategoriBetolt();
    }
       
    kategoriBetolt(){
        for (const key in this.adat) {
            
            if(key=="nev"){
                this.szuloelem.append("<option value="+this.adat.id+" id=m"+this.adat.id+">"+this.adat[key]+"</option>");
            }
        }
    }
}