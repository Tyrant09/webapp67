const matches = (obj,sourse) => Object.keys(sourse).every(key => obj.hasOwnProperty(key) && obj[key] === sourse[key]);
console.log(matches({age:25,hair:'long',beard:true},{hair:'long',beard:true}));
console.log(matches({hair:'long',beard:true},{age:25,hair:'long',beard:true}));