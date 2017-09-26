(function(window){var svgSprite='<svg><symbol id="icon-facebook" viewBox="0 0 1024 1024"><path d="M643.314688 170.966016l112.260096 0 0-168.06912L612.108288 2.896896l0 0.70656C423.75168 10.19392 385.068032 115.33312 381.717504 225.780736l-0.386048 0L381.331456 342.531072 269.07648 342.531072l0 168.090624 112.256 0 0 511.174656 201.403392 0L582.735872 510.62272l144.297984 0 28.540928-168.090624L582.735872 342.532096l0-104.3456C582.735872 201.049088 607.67744 170.966016 643.314688 170.966016z"  ></path></symbol><symbol id="icon-twitch" viewBox="0 0 1024 1024"><path d="M512 311.999v248h-82.857v-248h82.857zM739.429 311.999v248h-82.857v-248h82.857zM739.429 746.285l144.571-145.143v-454.286h-682.286v599.429h186.286v124l124-124h227.429zM966.857 63.999v578.857l-248 248h-186.286l-124 124h-124v-124h-227.429v-661.714l62.286-165.143h847.429z" fill="#2c2c2c" ></path></symbol><symbol id="icon-linkedin" viewBox="0 0 1024 1024"><path d="M743.838206 384.733455c-87.422072 0-146.035004 43.980677-170.026418 85.654822l-2.403746 0 0-72.467475L399.064858 397.920802l0 530.393929 179.524746 0 0-262.396175c0-69.170382 14.360056-136.185682 107.859543-136.185682 92.142583 0 93.368504 79.127152 93.368504 140.646274l0 257.935584 179.566702 0 0-290.925952C959.385377 494.586398 925.795351 384.733455 743.838206 384.733455zM101.006462 928.271752l149.266605 0L250.273067 384.453069 101.006462 384.453069 101.006462 928.271752zM175.636183 94.431719c-61.827137 0-111.952768 48.678676-111.952768 108.754936 0 60.078307 50.125631 108.777449 111.952768 108.777449 61.829184 0 111.954815-48.699142 111.954815-108.777449C287.590997 143.110395 237.465366 94.431719 175.636183 94.431719z"  ></path></symbol><symbol id="icon-socialmediaiconwhitetwitter" viewBox="0 0 1205 1024"><path d="M1172.416 240.212c-42.496 18.752-88 31.488-135.872 37.12 49.024-29.248 86.464-75.392 104.128-130.496-45.632 27.008-96.256 46.336-150.272 57.28-43.008-46.016-104.512-74.944-172.48-74.944-130.56 0-236.416 105.856-236.416 236.352 0 18.688 2.24 36.672 6.144 53.824-196.224-9.664-370.56-103.744-487.040-246.656-20.288 34.88-32.064 75.392-32.064 118.592 0 81.92 41.728 154.496 105.216 196.608-38.848-1.28-75.2-11.456-106.944-29.44-0.064 1.024-0.064 2.24-0.064 3.2 0 114.24 81.408 209.728 189.632 231.744-19.904 5.184-40.832 8.064-62.4 8.064-15.168 0-29.888-1.28-44.416-4.352 30.080 94.4 117.44 162.432 220.8 164.096-80.832 63.552-182.784 101.248-293.44 101.248-19.072 0-38.080-1.28-56.512-3.52 104.576 67.52 228.736 106.56 362.304 106.56 434.688 0 672.448-360.256 672.448-672.32 0-10.304-0.128-20.48-0.64-30.656 46.144-33.408 86.144-75.072 117.888-122.304z"  ></path></symbol><symbol id="icon-next" viewBox="0 0 1024 1024"><path d="M682.6496 530.944 427.8272 303.4112 379.2384 346.7264 585.5744 530.944 379.2384 715.1616 427.8272 758.528Z"  ></path><path d="M512 0C229.2224 0 0 229.2224 0 512s229.2224 512 512 512 512-229.2224 512-512S794.7776 0 512 0zM512 947.2c-239.9744 0-435.2-195.2256-435.2-435.2 0-239.9744 195.2256-435.2 435.2-435.2 239.9744 0 435.2 195.2256 435.2 435.2C947.2 751.9744 751.9744 947.2 512 947.2z"  ></path></symbol><symbol id="icon-playstation" viewBox="0 0 1024 1024"><path d="M799.6 406c-1.6-34.2-6.6-69-21.6-100.2-8.2-17.2-19.4-33-33-46.4-12.6-12.8-27.2-23.4-42.6-32.6-34.2-20.4-75-34-168.8-62S384 128 384 128l0 716.6 159.8 51.4c0 0 0.2-397.6 0.2-599l0-7.6c0-18.6 15-33.6 32.2-33.6l1 0c17 0 31 15 31 33.6l0 4.4 0 262.2c22 10.6 58.4 18.6 83.6 18.2 16.6 0.4 33.4-3.4 48-11.4 15.2-8.2 27.8-20.8 36.8-35.6 10.2-16.6 16.4-35.6 19.8-54.6C800.2 451 800.4 428.4 799.6 406z"  ></path><path d="M173.4 715.6c54.8-19.6 178.6-59 178.6-59l0-94.4c0 0-153 49.6-222.6 74.2-17.2 6.2-34.6 11.8-51.4 19-19.6 8.2-38.8 17.4-56.2 29.6-7.6 5.2-14.4 11.8-18.4 20.2-4 8.4-4.4 18.4-1 27.2 4 10.2 11.6 18.6 20.2 25.2 15.6 11.8 34.2 19 52.8 24.4 56.8 18.8 116.8 28 176.8 26.6 29-0.4 72-3.8 100-8.8l0-84c0 0-22 5-82.6 25-9.2 3-18.4 6.6-28 8.6-14.2 3.2-28.8 4.2-43.2 4.4-13-0.6-26.4-1.4-38.6-6.2-4.4-2-9.2-4.4-11-9.2-1.6-4 0.6-8 3.4-10.8C157.8 721.8 165.8 718.6 173.4 715.6z"  ></path><path d="M1024 691.8c-0.2-12-7.4-22.4-15.8-30-14.2-12.6-31.8-20.6-49.4-27-11-3.8-18.6-6.6-29.4-10-50.4-16.4-103.8-22.4-156.6-22.6-16 0.6-46.2 1-62 2.8-43.8 5-134.6 30.8-134.6 30.8l0 97.6c0 0 135-43.2 193-63.6 19.4-6.6 40.2-9.2 60.6-9.2 13 0.4 26.4 1.4 38.8 6.2 4.4 1.8 9 4.4 11 9 1.8 5.2-1.8 10-5.8 13-9.4 7.6-21.4 10.6-32.4 14.8C759.4 732.6 576 793 576 793l0 94c0 0 234.4-79.2 341.6-117.6 17.8-6.6 35.8-12.2 52.8-20.8 15.8-8 31.6-17.2 43.6-30.6C1020.2 710.8 1024 702 1024 691.8z"  ></path></symbol><symbol id="icon-download" viewBox="0 0 1024 1024"><path d="M843.479 243.86h-116.442c-21.435 0-38.812 17.377-38.812 38.812s17.377 38.812 38.812 38.812h77.938c21.263 0 38.499 17.236 38.499 38.499v543.998c0 21.263-17.236 38.499-38.499 38.499h-621.622c-21.263 0-38.499-17.236-38.499-38.499v-543.999c0-21.263 17.236-38.499 38.499-38.499h77.938c21.435 0 38.812-17.377 38.812-38.812s-17.377-38.812-38.812-38.812h-116.442c-42.868 0-77.62 34.751-77.62 77.62v621.006c0 42.868 34.751 77.62 77.62 77.62h698.63c42.868 0 77.62-34.751 77.62-77.62v-621.005c0-42.868-34.751-77.62-77.62-77.62z" fill="" ></path><path d="M288.644 488.008c-15.035-15.035-39.411-15.035-54.447 0l-0.442 0.442c-15.035 15.035-15.035 39.411 0 54.447l230.816 230.816c7.062 8.268 17.555 13.518 29.28 13.518h0.626c11.726 0 22.22-5.247 29.28-13.518l230.816-230.816c15.035-15.035 15.035-39.411 0-54.447l-0.442-0.442c-15.035-15.035-39.411-15.035-54.447 0l-166.709 166.709v-605.232c0-21.263-17.236-38.499-38.499-38.499h-0.626c-21.263 0-38.499 17.236-38.499 38.499v605.232l-166.709-166.709z" fill="" ></path></symbol><symbol id="icon-discord" viewBox="0 0 1024 1024"><path d="M938.666667 1024l-224-213.333333 26.88 85.333333H192A106.666667 106.666667 0 0 1 85.333333 789.333333v-640A106.666667 106.666667 0 0 1 192 42.666667h640A106.666667 106.666667 0 0 1 938.666667 149.333333V1024M512 290.133333c-114.346667 0-194.56 49.066667-194.56 49.066667 43.946667-39.253333 120.746667-61.866667 120.746667-61.866667l-7.253334-7.253333c-72.106667 1.28-137.386667 51.2-137.386666 51.2-73.386667 153.173333-68.693333 285.44-68.693334 285.44 59.733333 77.226667 148.48 71.68 148.48 71.68l30.293334-38.4c-53.333333-11.52-87.04-58.88-87.04-58.88S396.8 635.733333 512 635.733333s195.413333-54.613333 195.413333-54.613333-33.706667 47.36-87.04 58.88l30.293334 38.4s88.746667 5.546667 148.48-71.68c0 0 4.693333-132.266667-68.693334-285.44 0 0-65.28-49.92-137.386666-51.2l-7.253334 7.253333s76.8 22.613333 120.746667 61.866667c0 0-80.213333-49.066667-194.56-49.066667m-88.32 161.706667c27.733333 0 50.346667 24.32 49.92 54.186667 0 29.44-22.186667 54.186667-49.92 54.186666-27.306667 0-49.493333-24.746667-49.493333-54.186666 0-29.866667 21.76-54.186667 49.493333-54.186667m177.92 0c27.733333 0 49.92 24.32 49.92 54.186667 0 29.44-22.186667 54.186667-49.92 54.186666-27.306667 0-49.493333-24.746667-49.493333-54.186666 0-29.866667 21.76-54.186667 49.493333-54.186667z" fill="" ></path></symbol><symbol id="icon-oculus" viewBox="0 0 1024 1024"><path d="M773.76 595.2a108.8 108.8 0 0 1-45.056 17.728c-16.32 2.56-32.512 2.112-48.768 2.112H344.064c-16.32 0-32.512 0.512-48.832-2.112a109.888 109.888 0 0 1-45.12-17.792c-27.392-19.2-43.84-49.92-43.84-83.2 0-33.92 16.512-64.64 43.904-83.2 13.44-9.6 28.8-15.36 44.8-17.92 16-2.56 32-2.56 48.64-2.56h336c16 0 32.64-0.64 48.64 1.92s31.36 8.32 44.8 17.28c27.52 18.56 43.52 49.92 43.52 83.2s-16.64 64-44.16 83.2z m135.424-322.368a309.504 309.504 0 0 0-122.24-59.712c-25.6-6.208-51.392-8.96-77.76-9.792-19.2-0.64-38.4-0.448-58.24-0.448H373.76c-19.52 0-39.04-0.192-58.56 0.448a384.32 384.32 0 0 0-77.824 9.792c-44.8 10.88-86.4 30.848-122.24 59.776A305.856 305.856 0 0 0 0 512c0 93.056 42.24 180.928 114.752 239.168 36.096 28.928 77.44 48.896 122.24 59.712 25.728 6.208 51.456 8.96 77.824 9.792 19.2 0.64 38.4 0.448 58.24 0.448h277.12c19.2 0 39.04 0.192 58.24-0.448 26.24-0.832 51.84-3.584 77.44-9.792 44.8-10.88 85.76-30.848 122.24-59.776A304.256 304.256 0 0 0 1024 512a306.56 306.56 0 0 0-114.816-239.168z" fill="" ></path></symbol><symbol id="icon-ins" viewBox="0 0 1050 1024"><path d="M516.726 276.336c-143.544 0-262.459 114.452-262.459 256.998 0 142.572 116.867 256.998 262.459 256.998 145.592 0 262.459-116.447 262.459-256.998 0-140.551-118.942-256.998-262.459-256.998zM516.726 697.987c-92.265 0-168.146-74.306-168.146-164.654s75.881-164.628 168.146-164.628 168.146 74.279 168.146 164.628c0 90.348-75.881 164.628-168.146 164.628z" fill="#222222" ></path><path d="M729.981 270.297c0 32.163 26.626 58.237 59.471 58.237s59.471-26.073 59.471-58.237c0-0 0-0 0-0 0-32.163-26.626-58.237-59.471-58.237-32.845 0-59.471 26.073-59.471 58.237 0 0 0 0 0 0z" fill="#222222" ></path><path d="M943.235 119.716c-53.301-54.219-129.182-82.314-215.303-82.314h-422.413c-178.386 0-297.328 116.447-297.328 291.131v411.595c0 86.357 28.725 160.637 86.121 214.856 55.375 52.198 129.182 78.297 213.255 78.297h418.317c88.169 0 162.002-28.094 215.303-78.297 55.349-52.198 84.073-126.503 84.073-212.834v-413.617c0-84.336-28.725-156.619-82.025-208.817zM935.017 742.151c0 62.228-22.554 112.43-59.445 146.563-36.917 34.133-88.169 52.224-149.688 52.224h-418.317c-61.519 0-112.771-18.091-149.662-52.224-36.917-36.129-55.401-86.331-55.401-148.585v-411.595c0-60.232 18.485-110.434 55.401-146.563 34.842-34.133 88.143-52.224 149.662-52.224h422.413c61.519 0 112.771 18.091 149.662 54.219 34.869 36.155 55.401 86.331 55.401 144.568v413.617z" fill="#222222" ></path></symbol><symbol id="icon-steam" viewBox="0 0 1024 1024"><path d="M511.104 0A511.872 511.872 0 0 0 0.896 470.912L275.328 584.32a144.64 144.64 0 0 1 89.6-24.896L487.04 382.72v-2.56a193.216 193.216 0 0 1 193.024-193.024 193.344 193.344 0 0 1 193.088 193.152 193.28 193.28 0 0 1-193.088 193.088h-4.48L501.632 697.6c0 2.176 0.192 4.48 0.192 6.784 0 80-64.64 144.896-144.64 144.896-69.76 0-128.64-50.048-142.08-116.352L18.56 651.52C79.36 866.432 276.672 1024 511.04 1024a512 512 0 0 0 0-1024z m-189.44 776.96l-62.848-26.048c11.2 23.168 30.464 42.624 56.064 53.312a108.8 108.8 0 0 0 83.648-200.832 108.8 108.8 0 0 0-80.128-1.28l64.96 26.88a80.064 80.064 0 0 1-61.632 147.904z m487.04-396.928c0-70.912-57.728-128.64-128.64-128.64a128.64 128.64 0 1 0 128.64 128.64zM583.68 379.84a96.64 96.64 0 1 1 193.28 0 96.64 96.64 0 0 1-193.28 0z"  ></path></symbol><symbol id="icon-btn_game_vive" viewBox="0 0 1024 1024"><path d="M504.084 822.994c58.65 0.494 115.827-8.757 171.737-26.22 62.12-19.405 100.788-83.54 87.605-146.985-24.723-118.98-82.35-219.639-171.432-302.024-50.82-47.001-126.589-45.846-177.04 1.534-86.588 81.314-143.04 179.79-168.77 295.902-14.62 65.982 23.113 131.82 87.67 151.867 55.426 17.212 112.097 26.352 170.23 25.926M876.064 939H135.72c-23.286-5.343-38.457-19.982-49.366-40.811-20.854-39.81-47.298-76.56-65.022-118.117v-22.25c3.553-6.985 5.111-14.723 9.115-21.63 45.707-78.898 91.189-157.927 136.753-236.91 73.035-126.605 146.167-253.156 219.051-379.849 11.593-20.155 28.575-31.202 51.314-34.058l133.475-0.011c6.496 1.15 12.957 2.245 19.19 4.688 18.537 7.266 28.493 22.47 37.905 38.828 88.873 154.464 178.256 308.637 266.876 463.247 31.205 54.437 65.383 107.227 92.261 164.106v25.428c-2.418 5.448-4.381 11.155-7.325 16.301a19415.353 19415.353 0 0 1-63.986 110.997c-7.581 13.056-18.966 21.67-33.024 26.985-2.315 0.876-5.33 0.4-6.875 3.056"  ></path></symbol></svg>';var script=function(){var scripts=document.getElementsByTagName("script");return scripts[scripts.length-1]}();var shouldInjectCss=script.getAttribute("data-injectcss");var ready=function(fn){if(document.addEventListener){if(~["complete","loaded","interactive"].indexOf(document.readyState)){setTimeout(fn,0)}else{var loadFn=function(){document.removeEventListener("DOMContentLoaded",loadFn,false);fn()};document.addEventListener("DOMContentLoaded",loadFn,false)}}else if(document.attachEvent){IEContentLoaded(window,fn)}function IEContentLoaded(w,fn){var d=w.document,done=false,init=function(){if(!done){done=true;fn()}};var polling=function(){try{d.documentElement.doScroll("left")}catch(e){setTimeout(polling,50);return}init()};polling();d.onreadystatechange=function(){if(d.readyState=="complete"){d.onreadystatechange=null;init()}}}};var before=function(el,target){target.parentNode.insertBefore(el,target)};var prepend=function(el,target){if(target.firstChild){before(el,target.firstChild)}else{target.appendChild(el)}};function appendSvg(){var div,svg;div=document.createElement("div");div.innerHTML=svgSprite;svgSprite=null;svg=div.getElementsByTagName("svg")[0];if(svg){svg.setAttribute("aria-hidden","true");svg.style.position="absolute";svg.style.width=0;svg.style.height=0;svg.style.overflow="hidden";prepend(svg,document.body)}}if(shouldInjectCss&&!window.__iconfont__svg__cssinject__){window.__iconfont__svg__cssinject__=true;try{document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>")}catch(e){console&&console.log(e)}}ready(appendSvg)})(window)