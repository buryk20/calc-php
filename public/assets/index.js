(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))n(r);new MutationObserver(r=>{for(const c of r)if(c.type==="childList")for(const o of c.addedNodes)o.tagName==="LINK"&&o.rel==="modulepreload"&&n(o)}).observe(document,{childList:!0,subtree:!0});function t(r){const c={};return r.integrity&&(c.integrity=r.integrity),r.referrerPolicy&&(c.referrerPolicy=r.referrerPolicy),r.crossOrigin==="use-credentials"?c.credentials="include":r.crossOrigin==="anonymous"?c.credentials="omit":c.credentials="same-origin",c}function n(r){if(r.ep)return;r.ep=!0;const c=t(r);fetch(r.href,c)}})();class H{checkEmptiness(e){let t=[];return e.forEach(n=>{n.value!=""&&n.value!="+38(___)___-__-__"?t.push(!0):t.push(!1)}),t}checkEmail(e){return/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(e.trim())}checkPhone(e){return!e.includes("_")}checkCheckbox(e){let t=e.checked;return e.addEventListener("click",function(){e.checked?t=!0:t=!1}),t}}class T{delClassArr(e,t){e.forEach(n=>{n.classList.remove(t)})}delClickClassActiveArrStopPrapagation(e,t){e.forEach((n,r)=>{n.addEventListener("click",c=>{c.stopPropagation(),t[r].classList.remove("active")})})}arrClickAddActive(e){e.forEach((t,n)=>{t.addEventListener("click",function(){this.classList.add("active")})})}stopPropagationArr(e){e.forEach(t=>{t.addEventListener("click",n=>{n.stopPropagation()})})}animationInputs(e,t){e.forEach((n,r)=>{n.addEventListener("click",function(){t[r].classList.add("active")}),n.addEventListener("blur",()=>{e[r].value===""&&t[r].classList.remove("active")})})}telegramMessege(e,t,n,r,c,o){let d=new Date;fetch(`https://api.telegram.org/bot${e}/sendMessage`,{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify({chat_id:t,text:`Новое сообщение из контактной формы на сайте ${o}. 
 Имя: ${n} 
 Email: ${r} 
 Телефон: ${c}  
 Время: ${d}`})}).then(s=>{if(!s.ok)throw new Error(`Failed to send message: ${s.status} ${s.statusText}`);console.log("Message sent successfully!")}).catch(s=>{console.error(s)})}}let X=function(){if(document.querySelector("[data-upd-battery-selection]")){const e=document.querySelector("[data-btn-disable]"),t=document.querySelector("[data-kpd-invertor]"),n=document.querySelector("[data-load-w]"),r=document.querySelector("[data-kpd-invertor]"),c=document.querySelector("[data-tame-work]"),o=document.querySelector("[data-rated-voltage]"),d=[n,r,o,c],s=document.querySelectorAll("[data-input-selection-error]"),f=document.querySelector("[data-result-btn]"),A=document.querySelector("[data-result]"),M=new H,E=new T;e.addEventListener("click",function(){this.classList.toggle("active"),t.classList.toggle("disabled"),t.classList.contains("disabled")?(t.setAttribute("disabled",""),t.value=80):t.removeAttribute("disabled")}),f.addEventListener("click",()=>{E.delClassArr(d,"error"),E.delClassArr(s,"active");let g=M.checkEmptiness(d);if(g.some(h=>h===!1))g.forEach((h,v)=>{h===!1&&(d[v].classList.add("error"),s[v].classList.add("active"))});else{let h=n.value,v=r.value,y=c.value,I=o.value,L;L=h/I*y,console.log(L),v>1?L=L/(v/100):L=L/v,A.innerHTML=Math.ceil(L)}})}},Y=function(){if(document.querySelector("[data-percent-calculator]")){const e=new H,t=new T,n=document.querySelector("[data-btn-disable]"),r=document.querySelector("[data-accuracy]");n.addEventListener("click",function(){this.classList.toggle("active"),r.classList.toggle("disabled"),r.classList.contains("disabled")?(r.setAttribute("disabled",""),r.value=2):r.removeAttribute("disabled")});const c=document.querySelector("[data-percent-from-number-input-percent]"),o=document.querySelector("[data-percent-from-number-input-number]"),d=[c,o],s=document.querySelector("[data-percent-from-number-result-btn]"),f=document.querySelector("[data-percent-from-number-error]"),A=document.querySelector("[data-percent-from-number-result-input-percent]"),M=document.querySelector("[data-percent-from-number-result-input-number]"),E=document.querySelector("[data-percent-from-number-result]");s.addEventListener("click",()=>{event.preventDefault(),f.classList.remove("active"),t.delClassArr(d,"error");let b=e.checkEmptiness(d);if(b.some(a=>a===!1))f.classList.add("active"),b.forEach((a,l)=>{a===!1&&d[l].classList.add("error")});else{let a=c.value,l=o.value,m=l/100*a;if(!r.classList.contains("disabled")){let k=r.value;m=m.toFixed(k)}A.innerHTML=a,M.innerHTML=l,E.innerHTML=m}});const g=document.querySelector("[data-number-from-number-input-first-number]"),h=document.querySelector("[data-number-from-number-input-second-number]"),v=[g,h],y=document.querySelector("[data-number-from-number-result-btn]"),I=document.querySelector("[data-number-from-number-error]"),L=document.querySelector("[data-number-from-number-result-input-first-number]"),w=document.querySelector("[data-number-from-number-result-input-second-number]"),P=document.querySelector("[data-number-from-number-result]");y.addEventListener("click",()=>{event.preventDefault(),I.classList.remove("active"),t.delClassArr(v,"error");let b=e.checkEmptiness(v);if(b.some(a=>a===!1))b.forEach((a,l)=>{I.classList.add("active"),a===!1&&v[l].classList.add("error")});else{let a=g.value,l=h.value,m=a/(l/100);if(!r.classList.contains("disabled")){let k=r.value;m=m.toFixed(k)}L.innerHTML=a,w.innerHTML=l,P.innerHTML=m}});const q=document.querySelector("[data-number-from-percent-input-number]"),C=document.querySelector("[data-number-from-percent-input-percent]"),N=[q,C],S=document.querySelector("[data-number-from-percent-result-btn]"),i=document.querySelector("[data-number-from-percent-error]"),F=document.querySelector("[data-number-from-percent-result-input-number]"),p=document.querySelector("[data-number-from-percent-result-input-percent]"),D=document.querySelector("[data-number-from-percent-result]");S.addEventListener("click",()=>{event.preventDefault(),i.classList.remove("active"),t.delClassArr(N,"error");let b=e.checkEmptiness(N);if(b.some(a=>a===!1))b.forEach((a,l)=>{i.classList.add("active"),a===!1&&N[l].classList.add("error")});else{let a=q.value,l=C.value,m=a/l*100;if(!r.classList.contains("disabled")){let k=r.value;m=m.toFixed(k)}F.innerHTML=a,p.innerHTML=l,D.innerHTML=m}});const V=document.querySelector("[data-add-percent-input-percent]"),B=document.querySelector("[data-add-percent-input-number]"),R=[V,B],z=document.querySelector("[data-add-percent-result-btn]"),W=document.querySelector("[data-add-percent-error]"),Z=document.querySelector("[data-add-percent-result-input-percent]"),K=document.querySelector("[data-add-percent-result-input-number]"),U=document.querySelector("[data-add-percent-result]");z.addEventListener("click",()=>{event.preventDefault(),W.classList.remove("active"),t.delClassArr(R,"error");let b=e.checkEmptiness(R);if(b.some(a=>a===!1))b.forEach((a,l)=>{W.classList.add("active"),a===!1&&R[l].classList.add("error")});else{let a=V.value,l=B.value,m=l*1+l/100*a;if(!r.classList.contains("disabled")){let k=r.value;m=m.toFixed(k)}Z.innerHTML=a,K.innerHTML=l,U.innerHTML=m}});const _=document.querySelector("[data-subtract-percent-input-percent]"),O=document.querySelector("[data-subtract-percent-input-number]"),x=[_,O],j=document.querySelector("[data-subtract-percent-result-btn]"),$=document.querySelector("[data-subtract-percent-error]"),G=document.querySelector("[data-subtract-percent-result-input-percent]"),J=document.querySelector("[data-subtract-percent-result-input-number]"),Q=document.querySelector("[data-subtract-percent-result]");j.addEventListener("click",()=>{event.preventDefault(),$.classList.remove("active"),t.delClassArr(x,"error");let b=e.checkEmptiness(x);if(b.some(a=>a===!1))b.forEach((a,l)=>{$.classList.add("active"),a===!1&&x[l].classList.add("error")});else{let a=_.value,l=O.value,m=l*1-l/100*a;if(!r.classList.contains("disabled")){let k=r.value;m=m.toFixed(k)}G.innerHTML=a,J.innerHTML=l,Q.innerHTML=m}})}},ee=function(){if(document.querySelector("[data-text-layout-checker]")){const e=document.querySelector("[data-text-layout-checker-input-area]"),t=document.querySelector("[data-text-layout-checker-find-cirillic-btn]"),n=document.querySelector("[data-text-layout-checker-find-latin-btn]"),r=document.querySelector("[data-text-layout-checker-clear-btn]"),c=document.querySelector("[data-text-layout-checker-input-area-copy-btn]"),o=document.querySelector("[data-text-layout-checker-input-area-copy-msg]");r.addEventListener("click",function(){e.innerHTML=""}),t.addEventListener("click",function(){const d=e.textContent,s=/[а-яА-ЯёЁіІїЇєЄ]/g,f=d.replace(s,'<span class="layout__text-found">$&</span>');e.innerHTML=f}),n.addEventListener("click",function(){const d=e.textContent,s=/[a-zA-Z]/g,f=d.replace(s,'<span class="layout__text-found">$&</span>');e.innerHTML=f}),c.addEventListener("click",function(){navigator.clipboard.writeText(e.textContent),o.classList.toggle("active"),setTimeout(()=>o.classList.toggle("active"),800)})}},te=function(){if(document.querySelector("[data-form]")){const e=document.querySelectorAll("[data-icon-help]"),t=document.querySelectorAll("[data-close-help-btn]"),n=document.querySelectorAll("[data-help-text]"),r=document.querySelectorAll("[data-help-content]"),c=new T;c.arrClickAddActive(e),c.delClickClassActiveArrStopPrapagation(t,e),c.delClickClassActiveArrStopPrapagation(n,e),c.stopPropagationArr(r)}},re=function(){if(document.querySelector("[data-wrp-mob-menu]")){const e=document.querySelector("[data-burger]"),t=document.querySelector("[data-content-wrp]");e.addEventListener("click",function(){this.classList.toggle("active"),t.classList.toggle("active")})}},ne=function(){const u=window.location.href,e=document.querySelector("[data-lang-ru]"),t=document.querySelector("[data-lang-ua]");u.includes("/ua/")||u.includes("/ua")?t.classList.add("active"):e.classList.add("active")},ce=function(){const u=document.querySelector("[data-header-wrp ]");if(u){const e=u.querySelector("[data-btn-menu]"),t=u.querySelector("[data-menu-list-wrp]"),n=document.querySelector("[data-btn-back-call]");console.log(n),e.addEventListener("click",function(){this.classList.toggle("active"),t.classList.toggle("active")}),n.addEventListener("click",()=>{t.classList.remove("active"),e.classList.remove("active")})}},ae=function(){const u=document.querySelector("[data-raschet-vremeni-avtonomnoy-raboty-IBP]"),e=window.location.href;let t="минут",n="минута",r="час",c="часов",o="часа";if(e.includes("/ua/")&&(t="хвилин",n="хвилина",r="година",c="годин",o="години"),u){const d=document.querySelector("[data-btn-disable]"),s=document.querySelector("[data-kpd-invertor]"),f=document.querySelector("[data-load-w]"),A=document.querySelector("[data-kpd-invertor]"),M=document.querySelector("[data-capacity-akb]"),E=document.querySelector("[data-rated-voltage]"),g=[f,A,E,M],h=document.querySelectorAll("[data-input-selection-error]"),v=document.querySelector("[data-result-btn]"),y=document.querySelector("[data-result]"),I=new H,L=new T;d.addEventListener("click",function(){this.classList.toggle("active"),s.classList.toggle("disabled"),s.classList.contains("disabled")?(s.setAttribute("disabled",""),s.value=80):s.removeAttribute("disabled")}),v.addEventListener("click",()=>{L.delClassArr(g,"error"),L.delClassArr(h,"active");let w=I.checkEmptiness(g);if(w.some(P=>P===!1))w.forEach((P,q)=>{P===!1&&(g[q].classList.add("error"),h[q].classList.add("active"))});else{let P=f.value,q=A.value,C=M.value,N=E.value,S;if(S=C*N/P,q>1?S=S*(q/100):S=S*q,S<1){let i=Math.ceil(S*60).toString();console.log(i[i.length-1]),i[i.length-1]==1?y.innerHTML=i+" "+n:y.innerHTML=i+" "+t}else{let i,F,p;i=Math.floor(Number(S)),F=(S-i).toFixed(2),p=F*60,i==1&&(p[p.toString()-1]==1?y.innerHTML=i+" "+r+" "+p+" "+n:y.innerHTML=i+" "+r+" "+p+" "+t),i[i.toString()-1]==2?p[p.toString()-1]==1?y.innerHTML=i+" "+o+" "+p+" "+n:y.innerHTML=i+" "+o+" "+p+" "+t:p[p.toString()-1]==1?y.innerHTML=i+" "+c+" "+p+" "+n:y.innerHTML=i+" "+c+" "+p+" "+t}}})}},oe=function(){if(document.querySelector("[data-navigation-wrp-page]")){const e=document.querySelectorAll("[data-navigation-page-link]");let t=window.location.href;e.forEach(n=>{n.href==t&&n.classList.add("active")})}},se=function(u){document.addEventListener("DOMContentLoaded",function(){const e=document.querySelector("[data-custom-dropdown]"),t=e.querySelector("[data-dropdown-input-wrp]"),n=e.querySelector("[data-dropdown-input]"),c=e.querySelector("[data-dropdown-list]").querySelectorAll("[data-value]");u.innerHTML=c[1].getAttribute("data-value"),n.value=c[1].getAttribute("data-value"),t.addEventListener("click",function(){e.classList.toggle("open")}),c.forEach(o=>{o.addEventListener("click",function(){o.getAttribute("data-value"),n.value=o.textContent,e.classList.remove("open"),u.innerHTML=o.textContent})}),document.addEventListener("click",function(o){e.contains(o.target)||e.classList.remove("open")})})},le=function(){if(document.querySelector("[data-raschet-ploshchadi-pryamougolnika]")){const e=document.querySelectorAll("[data-side]"),t=document.querySelector("[data-result-btn]"),n=document.querySelector("[data-result]"),r=document.querySelector("[data-unit-measurement]");se(r);const c=new H,o=new T;t.addEventListener("click",()=>{if(o.delClassArr(e,"error"),c.checkEmptiness(e).includes(!1))c.checkEmptiness(e).forEach((d,s)=>{d===!1&&e[s].classList.add("error")});else{let d=[];e.forEach(s=>{d.push(s.value)}),n.innerHTML=d.reduce((s,f)=>s*f,1)}})}};X();Y();ee();te();re();ne();ce();ae();oe();le();