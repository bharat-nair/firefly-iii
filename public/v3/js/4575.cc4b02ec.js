"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[4575],{4575:(e,a,t)=>{t.r(a),t.d(a,{default:()=>N});var s=t(9835),n=t(6970);const o={class:"row q-mx-md"},r={class:"col-12"},i={class:"text-h6"},c={class:"row"},u={class:"col-12 q-mb-xs"},l=(0,s._)("br",null,null,-1),d=(0,s._)("br",null,null,-1),w={class:"row q-mt-sm"},g={class:"col-12"};function p(e,a,t,p,h,m){const b=(0,s.up)("q-card-section"),_=(0,s.up)("q-card"),f=(0,s.up)("LargeTable"),q=(0,s.up)("q-page");return(0,s.wg)(),(0,s.j4)(q,null,{default:(0,s.w5)((()=>[(0,s._)("div",o,[(0,s._)("div",r,[(0,s.Wm)(_,{bordered:""},{default:(0,s.w5)((()=>[(0,s.Wm)(b,null,{default:(0,s.w5)((()=>[(0,s._)("div",i,(0,n.zw)(h.account.name),1)])),_:1}),(0,s.Wm)(b,null,{default:(0,s.w5)((()=>[(0,s._)("div",c,[(0,s._)("div",u,[(0,s.Uk)(" Name: "+(0,n.zw)(h.account.name),1),l,(0,s.Uk)(" IBAN: "+(0,n.zw)(h.account.iban),1),d])])])),_:1})])),_:1})])]),(0,s._)("div",w,[(0,s._)("div",g,[(0,s.Wm)(f,{ref:"table",loading:e.loading,page:h.page,rows:h.rows,"rows-number":h.rowsNumber,"rows-per-page":h.rowsPerPage,title:"Transactions",onOnRequest:m.onRequest},null,8,["loading","page","rows","rows-number","rows-per-page","onOnRequest"])])])])),_:1})}var h=t(160),m=t(7454),b=t(3247);const _={name:"Show",data(){return{account:{},rows:[],rowsNumber:1,rowsPerPage:10,page:1}},created(){this.id=parseInt(this.$route.params.id),this.getAccount()},mounted(){},components:{LargeTable:m.Z},methods:{onRequest:function(e){this.page=e.page,this.getAccount()},getAccount:function(){let e=new h.Z;e.get(this.id).then((e=>this.parseAccount(e))),this.loading=!0;const a=new b.Z;this.rows=[],e.transactions(this.id,this.page).then((e=>{let t=a.parseResponse(e);this.rowsPerPage=t.rowsPerPage,this.rowsNumber=t.rowsNumber,this.rows=t.rows,this.loading=!1}))},parseAccount:function(e){this.account={name:e.data.data.attributes.name,iban:e.data.data.attributes.iban}}}};var f=t(1639),q=t(9885),v=t(4458),P=t(3190),Z=t(9984),k=t.n(Z);const A=(0,f.Z)(_,[["render",p]]),N=A;k()(_,"components",{QPage:q.Z,QCard:v.Z,QCardSection:P.Z})}}]);