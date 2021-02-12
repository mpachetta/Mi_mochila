const elem_masc="auto,balde,broche,camión,cepillo,cucharón,cuchillo,florero,fuego,gallo,jabón,mate,ojo,pan,pantalón,plato,sillón,televisor,tenedor,vaso"
const elem_fem="abeja,banana,batería,bicicleta,cama,canilla,casa,cuchara,escoba,estufa,frutilla,gallina,gorra,guitarra,hoja,jarra,lapicera,manzana,mano,media,mochila,moto,naranja,pala,pera,plancha,puerta,silla,taza,vela"


lista_masc=elem_masc.split(",")
lista_fem=elem_fem.split(",")

let img_masc=[]


for (i=0;i<lista_masc.length;i++){

    img_masc.push(`<input type='image' value='el' src='img/${lista_masc[i]}.png' alt='${lista_masc[i]}' disabled=true>`)

}

let img_fem=[]

for (i=0;i<lista_fem.length;i++){

    img_fem.push(`<input type='image' value='la' src='img/${lista_fem[i]}.png' alt='${lista_fem[i]}' disabled=true>`)

}

let lista_singular=img_fem.concat(img_masc)


const elem_masc_Pl="autos,baldes,broches,camiones,cepillos,cucharones,cuchillos,floreros,gallos,jabones,mates,ojos,panes,pantalones,platos,sillones,televisores,tenedores,vasos"
const elem_fem_Pl="abejas,bananas,bicicletas,camas,casas,cucharas,escobas,estufas,frutillas,gallinas,gorras,guitarras,hojas,jarras,lapiceras,manzanas,manos,motos,medias,mochilas,naranjas,palas,peras,planchas,puertas,sillas,tazas,velas"

let lista_mascPl=elem_masc_Pl.split(",")
let lista_femPl=elem_fem_Pl.split(",")

let img_masc_Pl=[]


for (i=0;i<lista_mascPl.length;i++){

    img_masc_Pl.push(`<input type='image' value='los' src='img/${lista_mascPl[i]}.png' alt='${lista_masc[i]}' disabled=true>`)

}

let img_fem_Pl=[]

for (i=0;i<lista_femPl.length;i++){

    img_fem_Pl.push(`<input type='image' value='las' src='img/${lista_femPl[i]}.png' alt='${lista_fem[i]}' disabled=true>`)

}

let lista_plural=img_masc_Pl.concat(img_fem_Pl)

let lista_singular_plural=lista_singular.concat(lista_plural)