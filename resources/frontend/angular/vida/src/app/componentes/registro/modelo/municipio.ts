export class Municipio{

    private cod_mun: number;
    private nombre_mun:string;
    private cod_prov:number;
    
    constructor(cod_num:number, nombre_mun:string, cod_prov:number){
        this.cod_mun = cod_num;
        this.nombre_mun = nombre_mun;
        this.cod_prov = cod_prov;
    }

    public get getCod_mun():number{
        return this.cod_mun;
    }
    public get getNombre_mun():string{
        return this.nombre_mun;
    }

    public get getCod_prov():number{
        return this.cod_prov;
    }


    public set setCod_mun(cod_mun_new:number){
        this.cod_mun = cod_mun_new;
    }
    public set setNombre_mun(nombre_mun_new:string){
        this.nombre_mun = nombre_mun_new;
    }

    public set setCod_prov(cod_prov_new:number){
        this.cod_prov = cod_prov_new;
    }

}

