<template>
    <div class="container" >
        <div class="row">
           
            <div class="col-7">
                
               asdsa
            </div>
        </div>

        
        <hr class="mt-3"> 
        
        <hr>
        
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                emisores: [],
                compradores: [],
                inputProductos: [],
                precio: 0,
                sumatoria:0,
                productos:[],
                producto: {
                    idProducto: '',
                    nombreProducto: '',
                    cantidadProducto: 0,
                    valorUnitario:0,
                    valorTotal:0
                },
                factura: {
                    idFactura: '',
                    idEmisor: '',
                    idComprador: '',
                    valorFactura: 0,
                    iva: 12, //valor constante del iva
                    valorFinal: 0,
                }
            }
        },
        created(){
            this.cargarDatos();//CARGA LA INFORMACION SOLICITADA DE LA BASE DE DATOS
        },
        methods:{
            cargarDatos(){
                axios.get('listarEmisores').then(res=>{// SE CARGAN LOS EMISORES DESDE LA BASE DE DATOS
                    this.emisores = res.data;
                }),
                axios.get('listarCompradores').then(res=>{// SE CARGAN LOS COMPRADORES DESDE LA BASE DE DATOS
                    this.compradores = res.data;
                })
            },
            /
        }
    }
</script>
