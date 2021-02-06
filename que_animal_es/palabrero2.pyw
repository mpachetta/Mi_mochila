from random import sample
import tkinter as tk
from tkinter import StringVar

from tkinter import IntVar



root=tk.Tk()


opcion1_txt=StringVar()
opcion2_txt=StringVar()
opcion3_txt=StringVar()

var=StringVar()
puntos=IntVar()
puntos=0
elegida_princ=[]
palabras=["águila","araña","ardilla","armadillo",
          "avestruz","babosa","ballena","búfalo","buitre","burro",
          "caballo",
            "cabra",
            "camaleón",
            "camello",
            "cangrejo",
            "canguro",
            "caracol",
            "castor",
            "cebra",
            "cerdo",
            "cienpies",
            "ciervo",
            "cigüeña",
            "cisne",
            "cocodrilo",
            "comadreja",
            "conejo",
            "cucaracha",
            "delfín",
            "elefante",
            "escarabajo",
            "foca",
            "gallina",
            "gallo",
            "ganso",
            "garza",
            "gato",
            "gorila",
            "halcón",
            "hamster",
            "hipopótamo",
            "hormiga",
            "iguana",
            "jabalí",
            "jirafa",
            "koala",
            "lechuza",
            "león",
            "leopardo",
            "llama",
            "lobo",
            "loro",
            "mapache",
            "mariposa",
            "mono",
            "murciélago",
            "nutria",
            "ñandú",
            "oso",
            "oveja",
            "pantera",
            "pato",
            "pavo",
            "pelícano",
            "perro",
            "picaflor",
            "pulpo",
            "puma",
            "rana",
            "rata",
            "reno",
            "rinoceronte",
            "sapo",
            "serpiente",
            "tiburón",
            "tigre",
            "topo",
            "toro",
            "tortuga",
            "tucán",
            "vaca",
            "zorro",
]

class PantallaJuego():
    def __init__(self,root):
        self.root=root
        self.root.title("Palabrero")
        
        self.pista()
        self.opciones()
        self.devolucion()
        self.botonera()
##        self.ponerImagen(elegida_princ)

    def pista(self):
        self.pista=tk.Frame(root)
        self.pista.grid(row=0,column=0)

    def opciones(self):
        self.opciones=tk.Frame(root)
        self.opciones.grid(row=1,column=0)
        
        self.opcion1=tk.Radiobutton(self.opciones)
        
        self.opcion1.config(font=(18),width=15,bg="gray",indicatoron=0)
        self.opcion2=tk.Radiobutton(self.opciones)
        
        self.opcion2.config(font=(18),width=15,bg="gray",indicatoron=0)
        self.opcion3=tk.Radiobutton(self.opciones)
        
        self.opcion3.config(font=(18),width=15,bg="gray",indicatoron=0)
        
    def devolucion(self):
        dictamen=StringVar()
        self.devolucion=tk.Label(root,width=20)
        self.devolucion.grid(row=2,column=0,pady=20)
        self.puntaje=tk.Label(root)
        self.puntaje.grid(row=3,column=0,pady=10)
        self.puntaje.config(font=(25),bg="black",fg="yellow",width=5,height=2)
        
        

    def botonera(self):
        self.botonera=tk.Frame(root)
        self.botonera.grid(row=4,column=0)
        self.boton=tk.Button(self.botonera,text="Comprobar")
        self.boton.grid(row=0,column=0,pady=20,padx=5)
        self.boton.config(width=15)
        self.boton_seguir=tk.Button(self.botonera,text="Continuar",command=lambda:continua())
        self.boton_seguir.grid(row=0,column=1,pady=20,padx=5)
        self.boton_seguir.config(width=15)
        
    def ponerImagen(self,x):
        y=""
        p=".png"
        z=y.join(x)
        z=z+p
        self.img1=tk.PhotoImage(file=z)
        self.foto1=tk.Label(self.pista,image=self.img1)
        self.foto1.image=self.img1
        
        
  
def continua():
    global var
    global elegida_princ
    global opcion1_txt
    global opcion2_txt
    global opcion3_txt
    global puntos
    

    elegidas=sample(palabras,k=3)
    opcion1_txt=elegidas[0]
    opcion2_txt=elegidas[1]
    opcion3_txt=elegidas[2]
    elegida_princ=sample(elegidas,k=1)
    
    app=PantallaJuego(root)
    
    app.ponerImagen(elegida_princ)
    
    app.foto1.grid(row=0,column=0)
    
    app.puntaje.config(text=puntos)
    app.puntaje.grid(row=3,column=0,pady=10)

    app.opcion1.config(text=opcion1_txt,variable=var,value=opcion1_txt)
    app.opcion2.config(text=opcion2_txt,variable=var,value=opcion2_txt)
    app.opcion3.config(text=opcion3_txt,variable=var,value=opcion3_txt)
    app.opcion1.grid(row=0,column=0,pady=3,padx=2)

    app.opcion2.grid(row=1,column=0,pady=3,padx=2)
    app.opcion3.grid(row=2,column=0,pady=3,padx=2)
    app.boton.config(command=lambda:comprueba())

    def comprueba():
        global var
        global elegida_princ
        global puntos
        
        respuesta=var.get()
        correcta=""
        correcta=correcta.join(elegida_princ)
        
        if respuesta==correcta:
        
            app.devolucion.config(text="Muy bien")
            puntos=puntos+10
        else:
            app.devolucion.config(text="Respuesta incorrecta")

        app.devolucion.grid(row=2,column=0,pady=20)


continua()





root.mainloop()
