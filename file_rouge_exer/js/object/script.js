let obj={
    "name":"amine",
    "age":12,
    "ville":"afadir",
    ajoutprofession:function ajoutprofession(profession) {
        this.profession=profession
    }
}

obj.ajoutprofession("teatcher")

console.log(obj)