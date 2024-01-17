
const products = [
    { name: 'Brand - Mitsubishi', image: '/FreshFocus/Vehicles/Bus_page/Bus_img/Rosa-fuso.jpg',model:'Model - Rosa Fuso',year:'Year - 2006',price:'Price - 4000$',text:'Isuzu Lorry 2012'},
    { name: 'Brand - Toyota', image: '/FreshFocus/Vehicles/Bus_page/Bus_img/Toyota-coster.jpg',model:'Model - Coster',year:'Year - 2008',price:'Price - 4000$',text:'Toyota Coster 2008'}
  ]; 
  const container = document.getElementById('imageID');
  const previewImg = document.getElementById('preview');
  const Brand = document.getElementById('Brand');
  const Model = document.getElementById('Model');
  const Year= document.getElementById('Year');
  const Price= document.getElementById('Price');
  const image_textID = document.getElementById('image_textID');
  const infoID = document.getElementById('infoID');
  
  products.forEach(product => {
    
    const imageElement = document.createElement('img');
    imageElement.src = product.image;
    imageElement.alt = product.name;
    const paragraph = document.createElement('p');
    paragraph.textContent = product.text;
  
  
    imageElement.addEventListener('click', () => {
      (previewImg.src = product.image);
      Brand.innerText = product.name
      Model.innerText = product.model
      Year.innerText  = product.year
      Price.innerText = product.price
      infoID.innerText= paragraph.textContent
    
    });

    
    container.appendChild(imageElement);
    container.appendChild(paragraph);
    
  });
