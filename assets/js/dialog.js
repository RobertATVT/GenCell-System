var contentDialogs = {
	characterCreation1: 
'<div id="characterModal">'+
'        <div class="modal-content">'+
'            <h4 class="center modal-title b-blue-d3 ubuntu">Character Creation</h4>'+
'            <div class="rw" style="padding: 10px; margin-bottom: 0px;">'+
'                <div class="rw modal-info" style="margin-bottom: 0px;">'+
'                    <div class="cl m4 t24 info-title" style="padding: 0px;">Setting:</div>'+
'                    <div class="cl m7 t24 left">'+
'                        <select id="settingSelect">'+
'                            <option value="Antitrust">Antitrust</option>'+
'                            <option value="Mists of Erluun">Mists of Erluun</option>'+
'                            <option value="Steamshot">Steamshot</option>'+
'                            <option value="Velvet Skies">Velvet Skies</option>'+
'                            <option value="other">Other setting not listed</option>'+
'                        </select>'+
'                    </div>'+
'                    <div class="cl m2 t24"></div>'+
'                    <div class="cl m4 t24 info-title" style="padding: 0px;">Campaign Power Level: </div>'+
'                    <div class="cl m7 t24">'+
'                        <select id="cplSelect" onChange="setCPL(this)">'+
'                            <option value="15">Normal Campaign</option>'+
'                            <option value="20">Strong Campaign</option>'+
'                            <option value="25">Powerful Campaign</option>'+
'                            <option value="30">Epic Campaign</option>'+
'                        </select>'+
'                    </div>'+
'                </div>'+
'            </div>'+
'            <div class="rw" style="padding: 10px;margin-bottom: 0px; margin-top: -10px;">'+
'                <div class="rw modal-info" style="margin-bottom: 0px">'+
'                    <form autocomplete="off">'+
'                        <div class="left cl m2 t12">BPs</div>'+
'                        <div class="left cl m2 t12"><input type="text" id="valueBPs" value="0"></div>'+
'                        <div class="cl m2 t12 center">Breed</div>'+
'                        <div class="cl m2 t12 center">'+
'                            <input type="number" id="cplBreed" min="1" max="5" step="1" value="2" onChange="adjustCPL(this)"></div>'+
'                        <div class="cl m2 t12 center">Attributes</div>'+
'                        <div class="cl m2 t12 center">'+
'                            <input type="number" id="cplAttributes" min="1" max="5" step="1" value="2" onChange="adjustCPL(this)"></div>'+
'                        <div class="cl m2 t12 center">Skills</div>'+
'                        <div class="cl m2 t12 center">'+
'                            <input type="number" id="cplSkills" min="1" max="5" step="1" value="2" onChange="adjustCPL(this)"></div>'+
'                        <div class="cl m2 t12 center">Talents</div>'+
'                        <div class="cl m2 t12 center">'+
'                            <input type="number" id="cplTalents" min="1" max="5" step="1" value="2" onChange="adjustCPL(this)"></div>'+
'                        <div class="cl m2 t12 center">Resources</div>'+
'                        <div class="cl m2 t12 center">'+
'                            <input type="number" id="cplResources" min="1" max="5" step="1" value="2" onChange="adjustCPL(this)"></div>'+
'                    </form>'+
'                </div>'+
'            </div>'+
'        </div>'+
'        <div class="modal-footer">'+
'            <div class="rw">'+
'                <div class="center cl t12 hide-medium-up">'+
'                    <button type="button" class="btn btn-primary" id="transferButton" onclick="validateForm(this)">Transfer</button>'+
'                </div>'+
'                <div class="center cl t12 hide-medium-up">'+
'                    <button type="button" class="btn btn-secondary modal-close">Cancel</button>'+
'                </div>'+
'                <div class="cl t24 hide-small-down">'+
'                    <button type="button" class="btn btn-primary" id="transferButton" onclick="validateForm(this)">Transfer</button>'+
'                    <button type="button" class="btn btn-secondary modal-close">Cancel</button>'+
'                </div>'+
'            </div>'+
'        </div>'+
'    </div>',
}