	var EntitiesExplain =
		[
//		{
//		 "title":"", "ID":" ()", "subtitle":"",
//		 "group":"",
//		 "alt1":"",
//		 "alt2":"",
//		 "type":["Game", "Front", "Tele", "Speedup", "Switch", "Tune", "Overlay"],
//		 "shape":"rect", "coords":""
//		},

/* ==========[ Row #1 (ID: 0-15) ]========== */
		{
		 "title":"EMPTY", "ID":"", "subtitle":"",
		 "group":"",
		 "alt1":"Can be used as an eraser.",
		 "alt2":"",
		 "type":["Game", "Front", "Tele", "Speedup", "Switch", "Tune"],
		 "shape":"rect", "coords":"0, 0, 64, 64"
		},
		{
		 "title":"HOOKABLE", "ID":" (1)", "subtitle":"",
		 "group":"",
		 "alt1":"It's possible to hook and collide with it.",
		 "alt2":"",
		 "type":["Game", "Overlay"],
		 "shape":"rect", "coords":"64, 0, 128, 64"
		},
		{
		 "title":"KILL", "ID":" (2)", "subtitle":"",
		 "group":"",
		 "alt1":"Kills the tee.",
		 "alt2":"",
		 "type":["Game", "Overlay"],
		 "shape":"rect", "coords":"128, 0, 192, 64"
		},
		{
		 "title":"UNHOOKABLE", "ID":" (3)", "subtitle":"",
		 "group":"",
		 "alt1":"It's not possible to hook it,<br />but can collide with it.",
		 "alt2":"",
		 "type":["Game"],
		 "shape":"rect", "coords":"192, 0, 256, 64"
		},
		{
		 "title":"LASER BLOCKER", "ID":" (4)", "subtitle":"",
		 "group":"",
		 "alt1":"Doesn't let DRAGGING & SPINNING LASER and PLASMA TURRET reach tees through it.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"256, 0, 320, 64"
		},
		{
		 "title":"UNHOOKABLE", "ID":" (5)", "subtitle":"",
		 "group":"",
		 "alt1":"It's not possible to hook it,<br />but can collide with it.",
		 "alt2":"",
		 "type":["Overlay"],
		 "shape":"rect", "coords":"320, 0, 384, 64"
		},
		{
		 "title":"HOOKTHROUGH", "ID":" (6)", "subtitle":"",
		 "group":"",
		 "alt1":"Combined with (UN)HOOKABLE tiles, allows to hook through the walls.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"384, 0, 448, 64"
		},
		{
		 "title":"JUMP", "ID":" (7)", "subtitle":"",
		 "group":"",
		 "alt1":"Sets defined amount of jumps (default is 2).",
		 "alt2":"",
		 "type":["Switch", "Overlay"],
		 "shape":"rect", "coords":"448, 0, 512, 64"
		},
		{
		 "title":"TIME SWITCH", "ID":" (8)", "subtitle":"activate",
		 "group":"Switch",
		 "alt1":"Activates switch (e.g. closes door)<br />with the same number for set<br />amount of seconds.",
		 "alt2":"",
		 "type":["Overlay"],
		 "shape":"rect", "coords":"512, 0, 576, 64"
		},
		{
		 "title":"FREEZE", "ID":" (9)", "subtitle":"",
		 "group":"(Un)freeze",
		 "alt1":"Freezes tees for 3 seconds.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"576, 0, 640, 64"
		},
			{
			 "title":"FREEZE", "ID":" (9)", "subtitle":"",
			 "group":"",
			 "alt1":"Freezes tees for defined amount of seconds.",
			 "alt2":"",
			 "type":["Switch"],
			 "shape":"rect", "coords":"576, 0, 640, 64"
			},
			{
			 "title":"FREEZE", "ID":" (9)", "subtitle":"",
			 "group":"(Un)freeze",
			 "alt1":"Freezes tees for defined amount<br />of seconds (3 by default).",
			 "alt2":"",
			 "type":["Overlay"],
			 "shape":"rect", "coords":"576, 0, 640, 64"
			},
		{
		 "title":"EVIL TELEPORT", "ID":" (10)", "subtitle":"FROM",
		 "group":"Tele",
		 "alt1":"After falling into this tile, tees appear<br />on TO with the same number.<br />Speed and hook are <u>deleted</u>.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"640, 0, 704, 64"
		},
		{
		 "title":"UNFREEZE", "ID":" (11)", "subtitle":"",
		 "group":"(Un)freeze",
		 "alt1":"Unfreezes tees immediately.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"704, 0, 768, 64"
		},
		{
		 "title":"DEEP FREEZE", "ID":" (12)", "subtitle":"",
		 "group":"(Un)deep",
		 "alt1":"Permanent freeze.<br />Only UNDEEP tile can<br />cancel this effect.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"768, 0, 832, 64"
		},
			{
			"title":"DEEP FREEZE", "ID":" (12)", "subtitle":"",
			"group":"(Un)deep",
			"alt1":"Permanent freeze.<br />Only UNDEEP tile can<br />cancel this effect.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"768, 0, 832, 64"
			},
		{
		 "title":"UNDEEP", "ID":" (13)", "subtitle":"",
		 "group":"(Un)deep",
		 "alt1":"Removes DEEP FREEZE effect.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"832, 0, 896, 64"
		},
			{
			"title":"UNDEEP", "ID":" (13)", "subtitle":"",
			"group":"(Un)deep",
			"alt1":"Removes DEEP FREEZE effect.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"832, 0, 896, 64"
			},
		{
		 "title":"WEAPON TELEPORT", "ID":" (14)", "subtitle":"FROM",
		 "group":"Tele",
		 "alt1":"Teleports <u>bullets</u> shot into it to<br />TELEPORT TO, where it comes out.<br />Direction, angle and length are kept.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"896, 0, 960, 64"
		},
		{
		 "title":"HOOK TELEPORT", "ID":" (15)", "subtitle":"FROM",
		 "group":"Tele",
		 "alt1":"Teleports <u>hooks</u> entered into it to<br />TELEPORT TO, where it comes out.<br />Direction, angle and length are kept.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"960, 0, 1024, 64"
		},

/* ==========[ Row #2 (ID: 16-31) ]========== */		
		{
		 "title":"WALLJUMP", "ID":" (16)", "subtitle":"",
		 "group":"",
		 "alt1":"Placed next to a wall.<br />Enables to climb up the wall.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"0, 64, 64, 128"
		},
			{
			 "title":"WALLJUMP", "ID":" (16)", "subtitle":"",
			 "group":"",
			 "alt1":"Enables to climb up the wall.",
			 "alt2":"",
			 "type":["Overlay"],
			 "shape":"rect", "coords":"0, 64, 64, 128"
			},
		{
		 "title":"ENDLESS HOOK", "ID":" (17)", "subtitle":"on",
		 "group":"Endless Hook",
		 "alt1":"Endless hook has been <u>activated</u>.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"64, 64, 128, 128"
		},
		{
		 "title":"ENDLESS HOOK", "ID":" (18)", "subtitle":"off",
		 "group":"Endless Hook",
		 "alt1":"Endless hook has been <u>deactivated</u>.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"128, 64, 192, 128"
		},
		{
		 "title":"HIT OTHERS", "ID":" (19)", "subtitle":"on",
		 "group":"Hit",
		 "alt1":"You <u>can</u> hit others.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"192, 64, 256, 128"
		},
			{
			"title":"HIT OTHERS", "ID":" (19)", "subtitle":"on",
			"group":"Hit",
			"alt1":"You can <u>activate</u> hitting others for single weapons.",
			"alt2":"",
			"type":["Switch"],
			"shape":"rect", "coords":"192, 64, 256, 128"
			},
		{
		 "title":"HIT OTHERS", "ID":" (20)", "subtitle":"off",
		 "group":"Hit",
		 "alt1":"You <u>can't</u> hit others.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"256, 64, 320, 128"
		},
			{
			"title":"HIT OTHERS", "ID":" (20)", "subtitle":"off",
			"group":"Hit",
			"alt1":"You can <u>deactivate</u> hitting others for single weapons.",
			"alt2":"",
			"type":["Switch"],
			"shape":"rect", "coords":"256, 64, 320, 128"
			},
		{
		 "title":"SOLO", "ID":" (21)", "subtitle":"on",
		 "group":"Solo",
		 "alt1":"You are now <u>in</u> a solo part.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"320, 64, 384, 128"
		},
		{
		 "title":"SOLO", "ID":" (22)", "subtitle":"off",
		 "group":"Solo",
		 "alt1":"You are now <u>out</u> of the solo part.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"384, 64, 448, 128"
		},
			{
			 "title":"TIME SWITCH", "ID":" (22)", "subtitle":"activate",
			 "group":"Switch",
			 "alt1":"Activates switch (e.g. closes door)<br />with the same number for set<br />amount of seconds.",
			 "alt2":"",
			 "type":["Switch"],
			 "shape":"rect", "coords":"384, 64, 448, 128"
			},
		{
		 "title":"TIME SWITCH", "ID":" (23)", "subtitle":"deactivate",
		 "group":"Switch",
		 "alt1":"Deactivates switch (e.g. opens door) with the same number for set amount of seconds.",
		 "alt2":"",
		 "type":["Switch", "Overlay"],
		 "shape":"rect", "coords":"448, 64, 512, 128"
		},
		{
		 "title":"SWITCH", "ID":" (24)", "subtitle":"activate",
		 "group":"Switch",
		 "alt1":"Activates switch (e.g. closes door) with the same number.",
		 "alt2":"",
		 "type":["Switch", "Overlay"],
		 "shape":"rect", "coords":"512, 64, 576, 128"
		},
		{
		 "title":"SWITCH", "ID":" (25)", "subtitle":"deactivate",
		 "group":"Switch",
		 "alt1":"Deactivates switch (e.g. closes door) with the same number.",
		 "alt2":"",
		 "type":["Switch", "Overlay"],
		 "shape":"rect", "coords":"576, 64, 640, 128"
		},
		{
		 "title":"TELEPORT", "ID":" (26)", "subtitle":"FROM",
		 "group":"Tele",
		 "alt1":"After falling into this tile, tees appear on TO with the same number.<br />Speed and hook are <u>kept</u>.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"640, 64, 704, 128"
		},
		{
		 "title":"TELEPORT", "ID":" (27)", "subtitle":"TO",
		 "group":"Tele",
		 "alt1":"Teleport destination tile for FROMs, WEAPON & HOOK TELEPORTs with the same numbers.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"704, 64, 768, 128"
		},
		{
		 "title":"SPEEDUP", "ID":" (28)", "subtitle":"",
		 "group":"",
		 "alt1":"Gives tee defined speed.<br />Arrow shows direction and angle.",
		 "alt2":"",
		 "type":["Speedup"],
		 "shape":"rect", "coords":"768, 64, 832, 128"
		},
		{
		 "title":"TELEPORT CHECKPOINT", "ID":" (29)", "subtitle":"",
		 "group":"Tele",
		 "alt1":"After having touched this tile, any CFRM will teleport you to CTO with the same number.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"832, 64, 896, 128"
		},
		{
		 "title":"CHECKPOINT TELEPORT", "ID":" (30)", "subtitle":"TO",
		 "group":"Tele",
		 "alt1":"Here tees will appear after touching TELEPORT CHECKPOINT with the same number and falling into CFROM TELEPORT.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"896, 64, 960, 128"
		},
		{
		 "title":"CHECKPOINT TELEPORT", "ID":" (31)", "subtitle":"FROM",
		 "group":"Tele",
		 "alt1":"Sends tees to CTO with the same number as the last touched TELEPORT CHECKPOINT.<br />Speed and hook are <u>kept</u>.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"960, 64, 1024, 128"
		},
/* ==========[ Row #3 (ID: 32-47) ]========== */	
		{
		 "title":"REFILL JUMPS", "ID":" (32)", "subtitle":"",
		 "group":"",
		 "alt1":"Restores all jumps.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"0, 128, 64, 192"
		},
		{
		 "title":"START", "ID":" (33)", "subtitle":"",
		 "group":"",
		 "alt1":"Starts counting your race time.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"64, 128, 128, 192"
		},
		{
		 "title":"FINISH", "ID":" (34)", "subtitle":"",
		 "group":"",
		 "alt1":"End of race.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"128, 128, 192, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (35)", "subtitle":"#1",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"192, 128, 256, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (36)", "subtitle":"#2",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"256, 128, 320, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (37)", "subtitle":"#3",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"320, 128, 384, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (38)", "subtitle":"#4",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"384, 128, 448, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (39)", "subtitle":"#5",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"448, 128, 512, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (40)", "subtitle":"#6",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"512, 128, 576, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (41)", "subtitle":"#7",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"576, 128, 640, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (42)", "subtitle":"#8",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"640, 128, 704, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (43)", "subtitle":"#9",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"704, 128, 768, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (44)", "subtitle":"#10",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"768, 128, 832, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (45)", "subtitle":"#11",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"832, 128, 896, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (46)", "subtitle":"#12",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"896, 128, 960, 192"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (47)", "subtitle":"#13",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"960, 128, 1024, 192"
		},
	
/* ==========[ Row #4 (ID: 48-63) ]========== */		
		{
		 "title":"TIME CHECKPOINT", "ID":" (48)", "subtitle":"#14",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"0, 192, 64, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (49)", "subtitle":"#15",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"64, 192, 128, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (50)", "subtitle":"#16",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"128, 192, 192, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (51)", "subtitle":"#17",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"192, 192, 256, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (52)", "subtitle":"#18",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"256, 192, 320, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (53)", "subtitle":"#19",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"320, 192, 384, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (54)", "subtitle":"#20",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"384, 192, 448, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (55)", "subtitle":"#21",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"448, 192, 512, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (56)", "subtitle":"#22",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"512, 192, 576, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (57)", "subtitle":"#23",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"576, 192, 640, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (58)", "subtitle":"#24",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"640, 192, 704, 256"
		},
		{
		 "title":"TIME CHECKPOINT", "ID":" (59)", "subtitle":"#25",
		 "group":"CP",
		 "alt1":"Compares your current race time with your record to show you whether you are running faster or slower.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"704, 192, 768, 256"
		},
		{
		 "title":"STOPPER", "ID":" (60)", "subtitle":"one direction",
		 "group":"Stopper",
		 "alt1":"You can hook and shoot through it.<br />You can't go through it against the arrow.<br /><img src='img/Rotate.png' /><img src='img/Flip.png' />",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"768, 192, 832, 256"
		},
			{
			"title":"STOPPER", "ID":" (60)", "subtitle":"one direction",
			"group":"Stopper",
			"alt1":"You can hook and shoot through it.<br />You can't go through it against the arrow.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"768, 192, 832, 256"
			},
		{
		 "title":"STOPPER", "ID":" (61)", "subtitle":"two directions",
		 "group":"Stopper",
		 "alt1":"You can hook and shoot through it.<br />You can't go through it against the arrows.<br /><img src='img/Rotate.png' />",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"832, 192, 896, 256"
		},
			{
			"title":"STOPPER", "ID":" (61)", "subtitle":"two directions",
			"group":"Stopper",
			"alt1":"You can hook and shoot through it.<br />You can't go through it against the arrows.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"832, 192, 896, 256"
			},
		{
		 "title":"STOPPER", "ID":" (62)", "subtitle":"all directions",
		 "group":"Stopper",
		 "alt1":"You can hook and shoot through it.<br />You can't go through it.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"896, 192, 960, 256"
		},
		{
		 "title":"CHECKPOINT EVIL TELE", "ID":" (63)", "subtitle":"FROM",
		 "group":"Tele",
		 "alt1":"Sends tees to CTO with the same number as the last touched TELEPORT CHECKPOINT.<br />Speed and hook are <u>deleted</u>.",
		 "alt2":"",
		 "type":["Tele", "Overlay"],
		 "shape":"rect", "coords":"960, 192, 1024, 256"
		},
/* ==========[ Row #5 (ID: 64-79) ]========== */		
		{
		 "title":"SPEEDER", "ID":" (64)", "subtitle":"slow",
		 "group":"Speeder",
		 "alt1":"Causes weapons, SHIELD, HEART and SPINNING LASER to move.<br /><img src='img/Rotate.png' /><img src='img/Flip.png' />",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"0, 256, 64, 320"
		},
			{
			"title":"SPEEDER", "ID":" (64)", "subtitle":"slow",
			"group":"Speeder",
			"alt1":"Causes weapons, SHIELD, HEART and SPINNING LASER to move.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"0, 256, 64, 320"
			},
		{
		 "title":"SPEEDER", "ID":" (65)", "subtitle":"fast",
		 "group":"Speeder",
		 "alt1":"Causes weapons, SHIELD, HEART and SPINNING LASER to move.<br /><img src='img/Rotate.png' /><img src='img/Flip.png' />",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"64, 256, 128, 320"
		},
			{
			"title":"SPEEDER", "ID":" (65)", "subtitle":"fast",
			"group":"Speeder",
			"alt1":"Causes weapons, SHIELD, HEART and SPINNING LASER to move.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"64, 256, 128, 320"
			},
		{
		 "title":"TUNE ZONE", "ID":" (68)", "subtitle":"",
		 "group":"",
		 "alt1":"Area, where defined tunes work.",
		 "alt2":"",
		 "type":["Tune", "Overlay"],
		 "shape":"rect", "coords":"256, 256, 320, 320"
		},
		{
		 "title":"OLD LASER", "ID":" (71)", "subtitle":"whole map",
		 "group":"Pink Tile",
		 "alt1":"Shotgun drags others always towards the shooter, even after having bounced.<br />Shooter can't hit himself.<br />Place only one tile somewhere on the map.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"448, 256, 512, 320"
		},
			{
			"title":"OLD LASER", "ID":" (71)", "subtitle":"whole map",
			"group":"Pink Tile",
			"alt1":"Shotgun drags others always towards the shooter, even after having bounced.<br />Shooter can't hit himself.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"448, 256, 512, 320"
			},
		{
		 "title":"COLLISION OFF", "ID":" (72)", "subtitle":"whole map",
		 "group":"Pink Tile",
		 "alt1":"Nobody can collide with others.<br />Place only one tile somewhere on the map.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"512, 256, 576, 320"
		},
			{
			"title":"COLLISION OFF", "ID":" (72)", "subtitle":"whole map",
			"group":"Pink Tile",
			"alt1":"Nobody can collide with others.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"512, 256, 576, 320"
			},
		{
		 "title":"ENDLESS HOOK ON", "ID":" (73)", "subtitle":"whole map",
		 "group":"Pink Tile",
		 "alt1":"Everyone has endless hook.<br />Place only one tile somewhere on the map.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"576, 256, 640, 320"
		},
			{
			"title":"ENDLESS HOOK ON", "ID":" (73)", "subtitle":"whole map",
			"group":"Pink Tile",
			"alt1":"Everyone has endless hook.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"576, 256, 640, 320"
			},
		{
		 "title":"HIT OTHERS OFF", "ID":" (74)", "subtitle":"whole map",
		 "group":"Pink Tile",
		 "alt1":"Nobody can hit others.<br />Place only one tile somewhere on the map.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"640, 256, 704, 320"
		},
			{
			"title":"HIT OTHERS OFF", "ID":" (74)", "subtitle":"whole map",
			"group":"Pink Tile",
			"alt1":"Nobody can hit others.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"640, 256, 704, 320"
			},
		{
		 "title":"HOOK OTHERS OFF", "ID":" (75)", "subtitle":"whole map",
		 "group":"Pink Tile",
		 "alt1":"Nobody can hook others.<br />Place only one tile somewhere on the map.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"704, 256, 768, 320"
		},
			{
			"title":"HOOK OTHERS OFF", "ID":" (75)", "subtitle":"whole map",
			"group":"Pink Tile",
			"alt1":"Nobody can hook others.",
			"alt2":"",
			"type":["Overlay"],
			"shape":"rect", "coords":"704, 256, 768, 320"
			},
		{
		 "title":"PENALTY", "ID":" (79)", "subtitle":"",
		 "group":"",
		 "alt1":"<u>Adds</u> time to your current race time.<br />Opposite of BONUS.",
		 "alt2":"",
		 "type":["Switch", "Overlay"],
		 "shape":"rect", "coords":"960, 256, 1024, 320"
		},
/* ==========[ Row #6 (ID: 80-95) ]========== */		
		{
		 "title":"COLLISION", "ID":" (88)", "subtitle":"off",
		 "group":"Collision",
		 "alt1":"You <u>can't</u> collide with others.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"512, 320, 576, 384"
		},
		{
		 "title":"SUPER JUMP", "ID":" (89)", "subtitle":"off",
		 "group":"Super Jump",
		 "alt1":"You <u>don't have</u> unlimited air jumps.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"576, 320, 640, 384"
		},
		{
		 "title":"JETPACK", "ID":" (90)", "subtitle":"off",
		 "group":"Jetpack",
		 "alt1":"You <u>lost</u> your jetpack gun.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"640, 320, 704, 384"
		},
		{
		 "title":"HOOK OTHERS", "ID":" (91)", "subtitle":"off",
		 "group":"Hook Others",
		 "alt1":"You <u>can't</u> hook others.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"704, 320, 768, 384"
		},
		{
		 "title":"BONUS", "ID":" (95)", "subtitle":"",
		 "group":"",
		 "alt1":"<u>Subtracts</u> time from your current race time.<br />Opposite of PENALTY.",
		 "alt2":"",
		 "type":["Switch", "Overlay"],
		 "shape":"rect", "coords":"960, 320, 1024, 384"
		},
/* ==========[ Row #7 (ID: 96-111) ]========== */		
		{
		 "title":"COLLISION", "ID":" (104)", "subtitle":"on",
		 "group":"Collision",
		 "alt1":"You <u>can</u> collide with others.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"512, 384, 576, 448"
		},
		{
		 "title":"SUPER JUMP", "ID":" (105)", "subtitle":"on",
		 "group":"Super Jump",
		 "alt1":"You <u>have</u> unlimited air jumps.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"576, 384, 640, 448"
		},
		{
		 "title":"JETPACK", "ID":" (106)", "subtitle":"on",
		 "group":"Jetpack",
		 "alt1":"You <u>have</u> a jetpack gun.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"640, 384, 704, 448"
		},
		{
		 "title":"HOOK OTHERS", "ID":" (107)", "subtitle":"on",
		 "group":"Hook Others",
		 "alt1":"You <u>can</u> hook others.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"704, 384, 768, 448"
		},
/* ==========[ Row #8 (ID: 112-127) ]========== */		
/* ==========[ Row #9 (ID: 128-143) ]========== */
		{
		 "title":"CREDITS", "ID":" (140-143 & 156-159)", "subtitle":"",
		 "group":"",
		 "alt1":"Who designed the entities.",
		 "alt2":"",
		 "type":["Game", "Front", "Tele", "Speedup", "Switch", "Tune", "Overlay"],
		 "shape":"rect", "coords":"768, 512, 1024, 640"
		},

/* ==========[ Row #10 (ID: 144-159) ]========== */		
/* ==========[ Row #11 (ID: 160-175) ]========== */		
/* ==========[ Row #12 (ID: 176-191) ]========== */		
		{
		 "title":"ENTITIES OFF SIGN", "ID":" (190-191)", "subtitle":"",
		 "group":"",
		 "alt1":"Informs people playing with entities about important marks, tips, information, or text on the map. Players should turn entities off to see the note before continuing the race.",
		 "alt2":"",
		 "type":["Game", "Overlay"],
		 "shape":"rect", "coords":"896, 704, 1024, 768"
		},

/* ==========[ Row #13 (ID: 192-207) ]========== */		
		{
		 "title":"SPAWN", "ID":" (192)", "subtitle":"",
		 "group":"Spawn",
		 "alt1":"Here tees will appear after joining the game or dying somewhere on the map.",
		 "alt2":"",
		 "type":["Game", "Front", "Overlay"],
		 "shape":"rect", "coords":"0, 768, 64, 832"
		},
		{
		"title":"SPAWN", "ID":" (193)", "subtitle":"red team",
		"group":"Spawn",
		"alt1":"<b>Not used in DDRace.</b><br />Here spawn <u>red</u> team members.",
		"alt2":"",
		"type":["Game", "Front", "Overlay"],
		"shape":"rect", "coords":"64, 768, 128, 832"
		},
		{
		"title":"SPAWN", "ID":" (194)", "subtitle":"blue team",
		"group":"Spawn",
		"alt1":"<b>Not used in DDRace.</b><br />Here spawn <u>blue</u> team members.",
		"alt2":"",
		"type":["Game", "Front", "Overlay"],
		"shape":"rect", "coords":"128, 768, 192, 832"
		},
		{
		"title":"SPAWN", "ID":" (195)", "subtitle":"read team",
		"group":"Flag",
		"alt1":"<b>Not used in DDRace</b><br />Place where <u>red</u> team flag is.",
		"alt2":"",
		"type":["Game", "Front", "Overlay"],
		"shape":"rect", "coords":"192, 768, 256, 832"
		},
		{
		"title":"SPAWN", "ID":" (196)", "subtitle":"blue team",
		"group":"Flag",
		"alt1":"<b>Not used in DDRace</b><br />Place where <u>blue</u> team flag is.",
		"alt2":"",
		"type":["Game", "Front", "Overlay"],
		"shape":"rect", "coords":"256, 768, 320, 832"
		},
		{
		 "title":"SHIELD", "ID":" (197)", "subtitle":"",
		 "group":"",
		 "alt1":"Takes all weapons (except hammer and pistol) away.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"320, 768, 384, 832"
		},
			{
			"title":"SHIELD", "ID":" (197)", "subtitle":"",
			"group":"",
			"alt1":"Takes all weapons (except hammer and pistol) away.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"320, 768, 384, 832"
			},
		{
		 "title":"HEART", "ID":" (198)", "subtitle":"",
		 "group":"",
		 "alt1":"Works like a FREEZE tile.<br />Freezes tees for 3 seconds by default.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"384, 768, 448, 832"
		},
			{
			"title":"HEART", "ID":" (198)", "subtitle":"",
			"group":"",
			"alt1":"Works like a FREEZE tile.<br />Freezes tees for 3 seconds by default.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"384, 768, 448, 832"
			},
		{
		 "title":"SHOTGUN", "ID":" (199)", "subtitle":"",
		 "group":"Weapon",
		 "alt1":"Drags the tees towards it.<br />Bounces off the walls.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"448, 768, 512, 832"
		},
			{
			"title":"SHOTGUN", "ID":" (199)", "subtitle":"",
			"group":"Weapon",
			"alt1":"Drags the tees towards it.<br />Bounces off the walls.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"448, 768, 512, 832"
			},
		{
		 "title":"GRENADE LAUNCHER", "ID":" (200)", "subtitle":"known as rocket",
		 "group":"Weapon",
		 "alt1":"Throws exploding bullets.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"512, 768, 576, 832"
		},
			{
			"title":"GRENADE LAUNCHER", "ID":" (200)", "subtitle":"known as rocket",
			"group":"Weapon",
			"alt1":"Throws exploding bullets.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"512, 768, 576, 832"
			},
		{
		 "title":"NINJA", "ID":" (201)", "subtitle":"",
		 "group":"Weapon",
		 "alt1":"Makes you being invisible in darkest nights :)",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"576, 768, 640, 832"
		},
			{
			"title":"NINJA", "ID":" (201)", "subtitle":"",
			"group":"Weapon",
			"alt1":"Makes you being invisible in darkest nights :)<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"576, 768, 640, 832"
			},
		{
		 "title":"RIFLE", "ID":" (202)", "subtitle":"known as laser",
		 "group":"Weapon",
		 "alt1":"Unfreezes the tees.<br />Bounces off the walls.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"640, 768, 704, 832"
		},
			{
			"title":"RIFLE", "ID":" (202)", "subtitle":"known as laser",
			"group":"Weapon",
			"alt1":"Unfreezes the tees.<br />Bounces off the walls.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"640, 768, 704, 832"
			},
		{
		 "title":"SPINNING LASER", "ID":" (203)", "subtitle":"counter-clockwise, fast",
		 "group":"Spinning Laser",
		 "alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"704, 768, 768, 832"
		},
			{
			"title":"SPINNING LASER", "ID":" (203)", "subtitle":"counter-clockwise, fast",
			"group":"Spinning Laser",
			"alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"704, 768, 768, 832"
			},
		{
		 "title":"SPINNING LASER", "ID":" (204)", "subtitle":"counter-clockwise, medium speed",
		 "group":"Spinning Laser",
		 "alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"768, 768, 832, 832"
		},
			{
			"title":"SPINNING LASER", "ID":" (204)", "subtitle":"counter-clockwise, medium speed",
			"group":"Spinning Laser",
			"alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"768, 768, 832, 832"
			},
		{
		 "title":"SPINNING LASER", "ID":" (205)", "subtitle":"counter-clockwise, slow",
		 "group":"Spinning Laser",
		 "alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"832, 768, 896, 832"
		},
			{
			"title":"SPINNING LASER", "ID":" (205)", "subtitle":"counter-clockwise, slow",
			"group":"Spinning Laser",
			"alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"832, 768, 896, 832"
			},
		{
		 "title":"NON-SPINNING LASER", "ID":" (206)", "subtitle":"",
		 "group":"Spinning Laser",
		 "alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"896, 768, 960, 832"
		},
			{
			"title":"NON-SPINNING LASER", "ID":" (206)", "subtitle":"",
			"group":"Spinning Laser",
			"alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"896, 768, 960, 832"
			},
		{
		 "title":"SPINNING LASER", "ID":" (207)", "subtitle":"clockwise, slow",
		 "group":"Spinning Laser",
		 "alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"960, 768, 1024, 832"
		},
			{
			"title":"SPINNING LASER", "ID":" (207)", "subtitle":"clockwise, slow",
			"group":"Spinning Laser",
			"alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"960, 768, 1024, 832"
			},
/* ==========[ Row #14 (ID: 208-223) ]========== */		
		{
		 "title":"SPINNING LASER", "ID":" (208)", "subtitle":"clockwise, medium speed",
		 "group":"Spinning Laser",
		 "alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"0, 832, 64, 896"
		},
			{
			"title":"SPINNING LASER", "ID":" (208)", "subtitle":"clockwise, medium speed",
			"group":"Spinning Laser",
			"alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"0, 832, 64, 896"
			},
		{
		 "title":"SPINNING LASER", "ID":" (209)", "subtitle":"clockwise, fast",
		 "group":"Spinning Laser",
		 "alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"64, 832, 128, 896"
		},
			{
			"title":"SPINNING LASER", "ID":" (209)", "subtitle":"clockwise, fast",
			"group":"Spinning Laser",
			"alt1":"Tile, where freezing laser (made with LASER LENGTH) begins.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"64, 832, 128, 896"
			},
		{
		 "title":"LASER LENGTH", "ID":" (210)", "subtitle":"short",
		 "group":"Laser Length",
		 "alt1":"Combined with DOOR or SPINNING LASER, makes it <u>3</u> tiles long.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"128, 832, 192, 896"
		},
		{
		 "title":"LASER LENGTH", "ID":" (211)", "subtitle":"medium length",
		 "group":"Laser Length",
		 "alt1":"Combined with DOOR or SPINNING LASER, makes it <u>6</u> tiles long.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"192, 832, 256, 896"
		},
		{
		 "title":"LASER LENGTH", "ID":" (212)", "subtitle":"long",
		 "group":"Laser Length",
		 "alt1":"Combined with DOOR or SPINNING LASER, makes it <u>9</u> tiles long.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"256, 832, 320, 896"
		},
		{
		 "title":"LASER LENGTH CHANGE", "ID":" (213)", "subtitle":"lengthen, slow",
		 "group":"Length Change",
		 "alt1":"Combined with LASER LENGTH, causes it to lengthen and shorten constantly.<br /> Works only on (NON-)SPINNING LASER, not on DOOR.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"320, 832, 384, 896"
		},
		{
		 "title":"LASER LENGTH CHANGE", "ID":" (214)", "subtitle":"lengthen, medium speed",
		 "group":"Length Change",
		 "alt1":"Combined with LASER LENGTH, causes it to lengthen and shorten constantly.<br /> Works only on (NON-)SPINNING LASER, not on DOOR.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"384, 832, 448, 896"
		},
		{
		 "title":"LASER LENGTH CHANGE", "ID":" (215)", "subtitle":"lengthen, fast",
		 "group":"Length Change",
		 "alt1":"Combined with LASER LENGTH, causes it to lengthen and shorten constantly.<br /> Works only on (NON-)SPINNING LASER, not on DOOR.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"448, 832, 512, 896"
		},
		{
		 "title":"LASER LENGTH CHANGE", "ID":" (216)", "subtitle":"shorten, slow",
		 "group":"Length Change",
		 "alt1":"Combined with LASER LENGTH, causes it to shorten and lengthen constantly.<br /> Works only on (NON-)SPINNING LASER, not on DOOR.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"512, 832, 576, 896"
		},
		{
		 "title":"LASER LENGTH CHANGE", "ID":" (217)", "subtitle":"shorten, medium speed",
		 "group":"Length Change",
		 "alt1":"Combined with LASER LENGTH, causes it to shorten and lengthen constantly.<br /> Works only on (NON-)SPINNING LASER, not on DOOR.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"576, 832, 640, 896"
		},
		{
		 "title":"LASER LENGTH CHANGE", "ID":" (218)", "subtitle":"shorten, fast",
		 "group":"Length Change",
		 "alt1":"Combined with LASER LENGTH, causes it to shorten and lengthen constantly.<br /> Works only on (NON-)SPINNING LASER, not on DOOR.",
		 "alt2":"",
		 "type":["Game", "Front", "Switch", "Overlay"],
		 "shape":"rect", "coords":"640, 832, 704, 896"
		},
		{
		 "title":"PLASMA TURRET", "ID":" (220)", "subtitle":"exploding",
		 "group":"Shooting Plasma",
		 "alt1":"Shoots plasma bullets at the closest tee.<br />They explode on an obstacle they hit (wall or tee).",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"768, 832, 832, 896"
		},
			{
			"title":"PLASMA TURRET", "ID":" (220)", "subtitle":"exploding",
			"group":"Shooting Plasma",
			"alt1":"Shoots plasma bullets at the closest tee.<br />They explode on an obstacle they hit (wall or tee).<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"768, 832, 832, 896"
			},
		{
		 "title":"PLASMA TURRET", "ID":" (221)", "subtitle":"freezing",
		 "group":"Shooting Plasma",
		 "alt1":"Shoots plasma bullets that work like FREEZE at the closest tee.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"832, 832, 896, 896"
		},
			{
			"title":"PLASMA TURRET", "ID":" (221)", "subtitle":"freezing",
			"group":"Shooting Plasma",
			"alt1":"Shoots plasma bullets that work like FREEZE at the closest tee.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"832, 832, 896, 896"
			},
		{
		 "title":"PLASMA TURRET", "ID":" (222)", "subtitle":"exploding & freezing",
		 "group":"Shooting Plasma",
		 "alt1":"Shoots plasma bullets that work like FREEZE at the closest tee.<br />They also explode on an obstacle they hit (wall or tee).",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"896, 832, 960, 896"
		},
			{
			"title":"PLASMA TURRET", "ID":" (222)", "subtitle":"exploding & freezing",
			"group":"Shooting Plasma",
			"alt1":"Shoots plasma bullets that work like FREEZE at the closest tee.<br />They also explode on an obstacle they hit (wall or tee).<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"896, 832, 960, 896"
			},
		{
		 "title":"PLASMA TURRET", "ID":" (223)", "subtitle":"unfreezing",
		 "group":"Shooting Plasma",
		 "alt1":"Shoots plasma bullets that work like UNFREEZE at the closest tee.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"960, 832, 1024, 896"
		},
			{
			"title":"PLASMA TURRET", "ID":" (223)", "subtitle":"unfreezing",
			"group":"Shooting Plasma",
			"alt1":"Shoots plasma bullets that work like UNFREEZE at the closest tee.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"960, 832, 1024, 896"
			},
/* ==========[ Row #15 (ID: 224-239) ]========== */	
		{
		 "title":"EXPLODING BULLET", "ID":" (224)", "subtitle":"",
		 "group":"Bullet",
		 "alt1":"Bounces off the walls <u>with</u> explosion.<br />Touching the bullet works like FREEZE tile (freezes for 3 seconds by default).<br /><img src='img/Rotate.png' /><img src='img/Flip.png' />",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"0, 896, 64, 960"
		},
			{
			 "title":"EXPLODING BULLET", "ID":" (224)", "subtitle":"",
			 "group":"Bullet",
			 "alt1":"Bounces off the walls <u>with</u> explosion.<br />Touching the bullet works like FREEZE tile (freezes for 3 seconds by default).<br /><img src='img/Power.png' /><img src='img/Rotate.png' /><img src='img/Flip.png' />",
			 "alt2":"",
			 "type":["Switch"],
			 "shape":"rect", "coords":"0, 896, 64, 960"
			},
			{
			 "title":"EXPLODING BULLET", "ID":" (224)", "subtitle":"",
			 "group":"Bullet",
			 "alt1":"Bounces off the walls <u>with</u> explosion.<br />Touching the bullet works like FREEZE tile (freezes for 3 seconds by default).<br /><img src='img/Power.png' />",
			 "alt2":"",
			 "type":["Overlay"],
			 "shape":"rect", "coords":"0, 896, 64, 960"
			},
		{
		 "title":"BULLET", "ID":" (225)", "subtitle":"",
		 "group":"Bullet",
		 "alt1":"Bounces off the walls <u>without</u> explosion.<br />Touching the bullet works like FREEZE tile (freezes for 3 seconds by default).<br /><img src='img/Rotate.png' /><img src='img/Flip.png' />",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"64, 896, 128, 960"
		},		
			{
			 "title":"BULLET", "ID":" (225)", "subtitle":"",
			 "group":"Bullet",
			 "alt1":"Bounces off the walls <u>without</u> explosion.<br />Touching the bullet works like FREEZE tile (freezes for 3 seconds by default).<br /><img src='img/Power.png' /><img src='img/Rotate.png' /><img src='img/Flip.png' />",
			 "alt2":"",
			 "type":["Switch"],
			 "shape":"rect", "coords":"64, 896, 128, 960"
			},		
			{
			 "title":"BULLET", "ID":" (225)", "subtitle":"",
			 "group":"Bullet",
			 "alt1":"Bounces off the walls <u>without</u> explosion.<br />Touching the bullet works like FREEZE tile (freezes for 3 seconds by default).<br /><img src='img/Power.png' />",
			 "alt2":"",
			 "type":["Overlay"],
			 "shape":"rect", "coords":"64, 896, 128, 960"
			},		
		{
		 "title":"DRAGGING LASER", "ID":" (233)", "subtitle":"weak",
		 "group":"Dragging Laser",
		 "alt1":"Grabs and attracts the closest tee to it.<br />Can't reach tees through the walls and LASER BLOCKER.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"576, 896, 640, 960"
		},
			{
			"title":"DRAGGING LASER", "ID":" (233)", "subtitle":"weak",
			"group":"Dragging Laser",
			"alt1":"Grabs and attracts the closest tee to it.<br />Can't reach tees through the walls and LASER BLOCKER.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"576, 896, 640, 960"
			},
		{
		 "title":"DRAGGING LASER", "ID":" (234)", "subtitle":"medium strength",
		 "group":"Dragging Laser",
		 "alt1":"Grabs and attracts the closest tee to it.<br />Can't reach tees through the walls and LASER BLOCKER.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"640, 896, 704, 960"
		},
			{
			"title":"DRAGGING LASER", "ID":" (234)", "subtitle":"medium strength",
			"group":"Dragging Laser",
			"alt1":"Grabs and attracts the closest tee to it.<br />Can't reach tees through the walls and LASER BLOCKER.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"640, 896, 704, 960"
			},
		{
		 "title":"DRAGGING LASER", "ID":" (235)", "subtitle":"strong",
		 "group":"Dragging Laser",
		 "alt1":"Grabs and attracts the closest tee to it.<br />Can't reach tees through the walls and LASER BLOCKER.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"704, 896, 768, 960"
		},
			{
			"title":"DRAGGING LASER", "ID":" (235)", "subtitle":"strong",
			"group":"Dragging Laser",
			"alt1":"Grabs and attracts the closest tee to it.<br />Can't reach tees through the walls and LASER BLOCKER.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"704, 896, 768, 960"
			},
		{
		 "title":"DRAGGING LASER", "ID":" (236)", "subtitle":"through walls, weak",
		 "group":"Dragging Laser",
		 "alt1":"Grabs and attracts the closest tee to it.<br />Can reach tees through the walls but not through LASER BLOCKER.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"768, 896, 832, 960"
		},
			{
			"title":"DRAGGING LASER", "ID":" (236)", "subtitle":"through walls, weak",
			"group":"Dragging Laser",
			"alt1":"Grabs and attracts the closest tee to it.<br />Can reach tees through the walls but not through LASER BLOCKER.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"768, 896, 832, 960"
			},
		{
		 "title":"DRAGGING LASER", "ID":" (237)", "subtitle":"through walls, medium strength",
		 "group":"Dragging Laser",
		 "alt1":"Grabs and attracts the closest tee to it.<br />Can reach tees through the walls but not through LASER BLOCKER.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"832, 896, 896, 960"
		},
			{
			"title":"DRAGGING LASER", "ID":" (237)", "subtitle":"through walls, medium strength",
			"group":"Dragging Laser",
			"alt1":"Grabs and attracts the closest tee to it.<br />Can reach tees through the walls but not through LASER BLOCKER.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"832, 896, 896, 960"
			},
		{
		 "title":"DRAGGING LASER", "ID":" (238)", "subtitle":"through walls, strong",
		 "group":"Dragging Laser",
		 "alt1":"Grabs and attracts the closest tee to it.<br />Can reach tees through the walls but not through LASER BLOCKER.",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"896, 896, 960, 960"
		},
			{
			"title":"DRAGGING LASER", "ID":" (238)", "subtitle":"through walls, strong",
			"group":"Dragging Laser",
			"alt1":"Grabs and attracts the closest tee to it.<br />Can reach tees through the walls but not through LASER BLOCKER.<br /><img src='img/Power.png' />",
			"alt2":"",
			"type":["Switch", "Overlay"],
			"shape":"rect", "coords":"896, 896, 960, 960"
			},
/* ==========[ Row #16 (ID: 240-255) ]========== */		
		{
		 "title":"DOOR", "ID":" (240)", "subtitle":"",
		 "group":"",
		 "alt1":"Combined with LASER LENGTH will create doors.<br />Doesn't allow to go through it (only with NINJA).",
		 "alt2":"",
		 "type":["Game", "Front"],
		 "shape":"rect", "coords":"0, 960, 64, 1024"
		},
			{
			 "title":"DOOR", "ID":" (240)", "subtitle":"",
			 "group":"",
			 "alt1":"Combined with LASER LENGTH will create doors.<br />Doesn't allow to go through it (only with NINJA).<br /><img src='img/Power.png' />",
			 "alt2":"",
			 "type":["Switch"],
			 "shape":"rect", "coords":"0, 960, 64, 1024"
			},
			{
			 "title":"DOOR", "ID":" (240)", "subtitle":"",
			 "group":"",
			 "alt1":"Doesn't allow to go through it (only with NINJA).<br /><img src='img/Power.png' />",
			 "alt2":"",
			 "type":["Overlay"],
			 "shape":"rect", "coords":"0, 960, 64, 1024"
			},
		];





	var FindMap = $('#box map');
	var RecognizeMap = FindMap.attr('id');
	var MapArea = FindMap.children();

	$(EntitiesExplain).each(function()
		{
		 if(this.type.indexOf(RecognizeMap) != -1)
			{
			 $(FindMap).append
				(
				 '<area' +
				 ' title="' + this.title + this.ID + '<br />' + this.subtitle + '"' +
				 ' group="' + this.group + '"' +
				 ' alt1="' + this.alt1 + '"' +
				 ' alt2="' + this.alt2 + '"' +
				 ' shape="' + this.shape + '"' +
				 ' coords="' + this.coords + '"' +
				 '></area>'
				);
			}
		});
	$('area').each(function() // if area attribute "group" is empty, remove it (to avoid highlighting wrong area)
		{
		 if(!$(this).attr('group'))
			{
			 $(this).removeAttr('group');
			};
		});