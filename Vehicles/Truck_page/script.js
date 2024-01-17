
const products = [
    { name: 'Brand - Isuzu', image: '/FreshFocus/Vehicles/Truck_page/Lorry_img/isuzu-lorry1.jpg',model:'Model - Lorry',year:'Year - 2012',price:'Price - 5000$',text:'Isuzu Lorry 2012'},
    { name: 'Brand - Mahindra', image: '/FreshFocus/Vehicles/Truck_page/Lorry_img/Bollero.jpg',model:'Model - Bollero',year:'Year - 2012',price:'Price - 1500$',text:'Mahindra Bollero 2016'}
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
