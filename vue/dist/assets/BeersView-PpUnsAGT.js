import{_ as h,r as f,c as s,a as e,F as r,b as _,o,t as l,j as g,h as u,p as m,e as x}from"./index-H1KLLYLc.js";const v=c=>(m("data-v-9d837ef6"),c=c(),x(),c),b={class:"store overflow-hidden"},y={class:"container-fluid"},w={class:"row"},S={class:"col"},j={class:"col beers"},I={class:"display-2 text-center"},N={class:"d-flex flex-wrap justify-content-center align-items-center gap-5 text-center py-3"},k={class:"card col-10 col-lg-3 d-flex justify-content-center align-items-center",style:{width:"350px",height:"730px",overflow:"hidden"}},B={class:"img",style:{width:"400px",height:"400px","padding-top":"390px",position:"relative"}},V=["src","alt"],C=v(()=>e("div",{class:"gradient-overlay"},null,-1)),E={class:"card-body",style:{"max-height":"400px","box-sizing":"border-box",display:"flex","flex-direction":"column",overflow:"hidden","align-items":"center","justify-content":"center"}},O={class:"nombre pb-3"},F={key:0,class:"badge bg-danger"},J={class:"card-text d-flex justify-content-center align-items-center h-100"},P={class:"botones d-flex gap-2 justify-content-center mt-auto pt-3"},T=["onClick"],z={__name:"BeersView",setup(c){const a=f("");GET("/categoriasProducto").then(n=>{a.value=n.categoriasProducto,console.log(a.value)});function p(n){let i=JSON.parse(localStorage.getItem("pedido"))??[];i.indexOf(n)==-1&&(i.push(n),localStorage.setItem("pedido",JSON.stringify(i)))}return(n,i)=>(o(),s("section",b,[e("section",y,[(o(!0),s(r,null,_(a.value,d=>(o(),s("div",w,[e("div",S,[e("div",j,[e("h1",I,l(d.categoria),1),e("section",N,[(o(!0),s(r,null,_(d.productos,t=>(o(),s("div",k,[e("div",B,[e("img",{src:t.foto,class:"card-img-top",alt:t.nombre,style:{width:"100%",height:"100%","object-fit":"cover",position:"absolute",top:"0",left:"0"}},null,8,V)]),C,e("div",E,[e("h4",O,[g(l(t.nombre),1),t.new?(o(),s("span",F,"NEW")):u("",!0)]),e("p",J,l(t.descripcion),1),e("div",P,[e("button",{class:"btn btn-sm",type:"button",onClick:A=>p(t.id)},"Comprar",8,T)])])]))),256))])])])]))),256))])]))}},G=h(z,[["__scopeId","data-v-9d837ef6"]]);export{G as default};
