<!DOCTYPE html>
<button class="open-container-button_tt" ; id="open-container-button_tt" ;>Click here!</button>
<div id="container_tt" class="hidden_tt">
    <br>
    <textarea style="height: 200px; width: 1625px;" ; name="pt_con" ; id="pt_con" ;></textarea>
</div>

</html>

<script>
    const button = document.getElementById("open-container-button_tt");
    const container = document.getElementById("container_tt");
    let isOpen = false;

    button.addEventListener("click", () => {
        if (!isOpen) {
            container.classList.remove('hidden_tt');
            isOpen = true;
            button.innerHTML = "Close";
        } else {
            container.classList.add('hidden_tt');
            isOpen = false;
            button.innerHTML = "Click here!";
        }
    });
</script>

<style>
    .hidden_tt {
        display: none;
    }

    .open-container-button_tt {
        display: inline-block;
        padding: 10px 15px;
        font-size: 14px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .open-container-button_tt:hover {
        background-color: #3e8e41
    }

    .open-container-button_tt:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>