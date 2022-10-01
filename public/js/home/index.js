import fetch from "../modules/NeustTeamOneApi.js";
/**
 *-----------------------------------------------
 * @param Model entity.name
 * @param Attributes entity.attribute(show on table)
 * @param Button attribute.actions.key
 * @param btn_attribute key:['icon','tooltip','color']
 * @param Base_URL entiry.url
 * @return GUI BREAD
 */

$("body").on("click", ".btn-find", async (e) =>
    state.show($(e.currentTarget).data("index"))
);
$("body").on("click", ".btn-delete", (e) =>
    state.destroy($(e.currentTarget).data("index"))
);
$("body").on("keyup", "#search", () =>
    myFunction(),
);

function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("table-main");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

const state = {
    /* [Table] */
    entity: {
        name: "post",
        baseUrl: "api",
    },
    /* [Object Mapping] */
    models: [],
    /* [Tag object] */
    // btnKey: document.getElementById("key"),
    // btnLook: document.getElementById("look"),
    btnNew: document.getElementById("post"),
    Userid: document.getElementById("id"),
    modalTitle: document.getElementById("modal-title"),
    btnEngrave: document.getElementById("engrave"),
    activeIndex: 0,
    btnUpdate: null,
    btnDelete: null,
    /* [initialized] */
    init: () => {
        // Attach listeners
        // state.btnKey.addEventListener("keyup", state.ask);
        // state.btnKey.disabled = false;
        // state.btnLook.addEventListener("click", state.ask);
        // state.btnLook.disabled = false;
        state.btnNew.addEventListener("click", state.store);
        // state.btnNew.disabled = false;

        state.ask();
    },
    /* [ACTIONS] */
    ask: async () => {
        state.models = await fetch.translate(state.entity);
        if (state.models) {
            state.models.forEach((model) => state.writer(model));
        }
    },
    writer: (model) => {
        var index = $("#post-main").length;
        index =
            $(`#model-${model.id}`).length == 0
                ? index
                : $(`#model-${model.id}`).data("index");

                let divrow = $("<tr>", {
                    id: `model-${model.id}`,
                    "data-index": index,
                    class:"row",
                });
                // alert(index);
        
        let divcard = $("<div>", {id: `model-${model.id}`,"data-index": index,class: "card",style:"width: 50%; position: relative; left:345px; padding:20px"}).appendTo(divrow);
        let cardheader = $("<div>", { id: `model-${model.id}`,class: "card-header"});
        let cardheaderform = $("<div>", { id: `model-${model.id}`,class: "card-header-form"});
        let divcardbody = $("<div>", { class: "card-body"});
        $("<h4>", { class:"card-title", html: model.fullName }).appendTo(cardheader);
        $("<p>", { html: model.date +" || "+ model.time }).appendTo(divcardbody);
        $("<p>", { class:"card-text", html: model.description}).appendTo(divcardbody);
        let votebtn = $("<a>", { class:"btn btn-success btn-find", style:"width:50px;"});
        $("<i>", { class:"fas fa-ellipsis-v-alt" }).appendTo(votebtn);  
        $("<i>", { class:"fas fa-thumbs-up btn btn-primary" , style: "font-size:1.5em; margin-top:10px; margin:5px;"}).appendTo(divcardbody);  
        $("<i>", { class:"fas fa-comment-alt-lines btn btn-primary" , style: "font-size:1.5em; margin-top:10px; margin:5px; margin-left:10px"}).appendTo(divcardbody);

        // if(prescandidate_id.value==''){
        //     votebtn.appendTo(divcardbody);
        // }
        
        votebtn.appendTo(cardheaderform);
        cardheaderform.appendTo(cardheader);
        cardheader.appendTo(divcard);
        divcardbody.appendTo(divcard);
        // divcard.appendTo(divrow);
        $("#post-main").append(divrow);
        
    },

    create: () => {
        // state.btnEngrave.innerHTML = "Save";
        // state.btnEngrave.removeEventListener("click", state.update);
        state.btnEngrave.addEventListener("click", state.store);
        fetch.showModal(state.entity.name);
    },
    show: (i) => {
        state.activeIndex = i;
        state.btnEngrave.innerHTML = "Update";

        console.log(state.models[0].id);

        state.btnEngrave.removeEventListener("click", state.store);
        state.btnEngrave.addEventListener("click", state.update);
        state.btnEngrave.setAttribute("data-id", state.models[0].id);
        fetch.showOnModal(state.models[0]);
    },
    store: async (e) => {
        e.preventDefault();
        let params = $("#set-Model").serializeArray();
        let model = await fetch.store(state.entity, params);
        if (model) {
            state.models.push(model);
            state.writer(model);
            // $("#modal-main").modal("hide");
        }
    },
    update: async () => {
        let params = $("#set-Model").serializeArray();
        let pk = state.btnEngrave.getAttribute("data-id");
        let model = await fetch.update(state.entity, pk, params);

        if (model) {
            //    console.log(model)
            state.models[state.activeIndex] = model;
            fetch.writer(state.entity, model);

            $("#modal-main").modal("hide");
        }
    },
    destroy: async (i) => {
        let pkey = state.models[i].id;
        let ans = await fetch.destroy(state.entity, pkey);
        if (ans) {
            state.models.splice(i, 1);
        }
    },
};

window.addEventListener("load", state.init);
