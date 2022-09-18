	<style>
	.onlines {
    text-align: left;
    background-color: rgba(40, 40, 40, 0.65);
    height: 28px;
    width: 190px;
    border-radius: 5px;
    border-width: 2px;
    border-color: rgba(255, 255, 255, 0.20);
    border-style: solid;
    top: 5px;
	line-height: 16px;
    right: 200px;
    margin-right: 60px;
    position: absolute;
    z-index: 5;
    box-sizing: border-box;
    padding: 4px 0 0 5px;
    color: white;
    font-family: Ubuntu, sans-serif;
    font-size: 12px;
    user-select: none;
    -webkit-user-select: none;
    -webkit-box-shadow: 0px 2px 0px 0px rgba(0, 0, 0, 0.70), 1px 0px 0px 0px rgba(0, 0, 0, 0.70), -1px 0px 0px 0px rgba(0, 0, 0, 0.70);
    -moz-box-shadow: 0px 2px 0px 0px rgba(0, 0, 0, 0.70), 1px 0px 0px 0px rgba(0, 0, 0, 0.70), -1px 0px 0px 0px rgba(0, 0, 0, 0.70);
    box-shadow: 0px 2px 0px 0px rgba(0, 0, 0, 0.70), 1px 0px 0px 0px rgba(0, 0, 0, 0.70), 0px 0px 0px 1px rgba(0, 0, 0, 0.70);
}
button, label {
    display: inline-block;
}
.onlines > .hotel {
    text-align: center;
    background-color: #367897;
    height: 27px;
    width: 28px;
    border-radius: 5px;
    border-width: 2px;
    border-color: rgba(255, 255, 255, 0.20);
    border-style: solid;
    right: 0;
    top: -1px;
    margin-left: 161px;
    position: absolute;
    z-index: 5;
    box-sizing: border-box;
    padding: 2px 0;
    font-size: 12px;
    user-select: none;
    -webkit-user-select: none;
    -webkit-box-shadow: 0px 2px 0px 0px rgba(0, 0, 0, 0.70), 1px 0px 0px 0px rgba(0, 0, 0, 0.70), -1px 0px 0px 0px rgba(0, 0, 0, 0.70);
}
.hotel {
    left: 0;
    background-color: #000;
    z-index: 600;
}
	</style>
<div class="onlines" id="onlines">
        <label id="amount"><?= Game::usersOnline() ?></label> usuarios conectados
        <div class="hotel"><img src="templates\sloptv4.2\client\images/on.gif"></div>
    </div>
