const mutualfund = document.querySelector('#mutual-fund');
         mutualfund.oninput = findFunds;
        
        async function findFunds() {
        const URL = `https://api.mfapi.in/mf/search?q=${this.value}`;
        const fetchResult = fetch(URL)
        const response = await fetchResult;
        const jsonData = await response.json();
        const mflist =  document.querySelector('.mflist');
        const html = jsonData.map(data =>  [data.schemeName,data.schemeCode]);
        console.log(html);
        const newHtml = html.map( d => `<li id="${d[1]}">${d[0]}</li>`).join('');
        mflist.innerHTML = newHtml;
        const ul =  document.querySelectorAll('li');
        ul.forEach( el =>  el.addEventListener('click', function(){
          mutualfund.value = this.innerText;
          getF(this.id); }));
       
      
       async function getF(id) {
         
            const codeURL = `https://api.mfapi.in/mf/${id}`;
            const idfetchResult = fetch(codeURL);
            const idresponse = await idfetchResult;
            const idjsonData = await idresponse.json();
            const fundData = idjsonData.meta;
            const navData = idjsonData.data;
            mflist.innerHTML = '';
            const orderedNavData = navData.map(navDataArray => [fundData.scheme_name,fundData.scheme_category, navDataArray.date, navDataArray.nav]);

            const navDataHTML=  orderedNavData.map(nav =>  `
            <div class="box">
            <h3>${nav[1]} | Inception date : ${nav[2]}</h3>
            <h4>${nav[0]}</h4>
            <p class="nav">${Math.round(nav[3])}</p>
            </div>`).join('');
            document.querySelector('.fund-details').innerHTML = navDataHTML;
            document.querySelector('.btn').innerHTML = ` <div id="topBtn">
            <a href="#he"> <button>&uarr;<br>
            Top</button></a>
          </div>`;
        }
      
      
        
      }