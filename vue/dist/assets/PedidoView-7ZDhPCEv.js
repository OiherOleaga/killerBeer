import{_ as h,r as u,c as a,a as s,F as v,b as f,o as l,t as r,j as n,h as m,p as g,e as w}from"./index-H1KLLYLc.js";const c=d=>(g("data-v-ed903cda"),d=d(),w(),d),S={class:"pedido"},b={class:"container-fluid"},I={class:"pedidos row justify-content-center gap-3"},k={class:"cesta col-10 col-md-8 p-4"},y=c(()=>s("div",{class:"row"},[s("h2",null,"Cesta")],-1)),N={class:"col"},P={class:"row"},V=c(()=>s("hr",{class:"hr"},null,-1)),C={class:"col d-flex flex-wrap gap-4 align-items-center"},T=c(()=>s("div",null,[s("input",{type:"checkbox"})],-1)),j=["src"],x={class:"col"},B={class:"row"},O={key:0},E=c(()=>s("span",{class:"h6"},"GRATIS",-1)),F={class:"row"},G=c(()=>s("div",{class:"row"},[s("h4",{class:"h4 text-end"},"58.99€")],-1)),J={class:"row p-2 justify-content-end"},$=["onClick"],q=c(()=>s("div",{class:"col-10 col-md-2 comprar"},[s("h1",null,"Pedido"),s("p",null,[n("Subtotal (*Nº de productos*): "),s("span",{class:"h5"},"1000€")]),s("button",{class:"btn w-100 mb-2"},"Tramitar pedido")],-1)),A={__name:"PedidoView",setup(d){const i=u("");function p(t,_){i.value.splice(t,1);let e=JSON.parse(localStorage.getItem("pedido"));t=void 0;for(let o=0;o<e.length;o++)e[o]==_&&(t=o,o=e.length);t!==void 0&&e.splice(t,1),localStorage.setItem("pedido",JSON.stringify(e))}return POST("/getPedido",`{ "pedido" : ${localStorage.getItem("pedido")}}`).then(t=>{i.value=t.pedido}),(t,_)=>(l(),a("section",S,[s("div",b,[s("div",I,[s("div",k,[y,s("div",N,[s("div",P,[(l(!0),a(v,null,f(i.value,(e,o)=>(l(),a("div",{key:o,class:"row"},[V,s("div",C,[T,s("div",null,[s("img",{src:e.foto,alt:"foto producto"},null,8,j)]),s("div",x,[s("div",B,[s("h1",null,r(e.nombre),1),i.value.envioGratis?(l(),a("p",O,[n("Envio "),E,n(" disponible")])):m("",!0)]),s("div",F,[s("p",null,r(e.descripcion),1)]),G,s("div",J,[s("button",{class:"btn",onClick:D=>p(o,e.id)},"Quitar",8,$)])])])]))),128))])])]),q])])]))}},Q=h(A,[["__scopeId","data-v-ed903cda"]]);export{Q as default};