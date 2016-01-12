/* Latvian (UTF-8) initialisation for the jWPDev UI date picker plugin. */
/* @author Arturas Paleicikas <arturas.paleicikas@metasite.net> */
(function($) {
	$.datepick.regional['lv'] = {
		clearText: 'Notīrīt', clearStatus: '',
		closeText: 'Aizvērt', closeStatus: '',
		prevText: 'Iepr',  prevStatus: '',
		prevBigText: '&#x3c;&#x3c;', prevBigStatus: '',
		nextText: 'Nāka', nextStatus: '',
		nextBigText: '&#x3e;&#x3e;', nextBigStatus: '',
		currentText: 'Šodien', currentStatus: '',
		monthNames: ['Janvāris','Februāris','Marts','Aprīlis','Maijs','Jūnijs',
		'Jūlijs','Augusts','Septembris','Oktobris','Novembris','Decembris'],
		monthNamesShort: ['Jan','Feb','Mar','Apr','Mai','Jūn',
		'Jūl','Aug','Sep','Okt','Nov','Dec'],
		monthStatus: '', yearStatus: '',
		weekHeader: 'Nav', weekStatus: '',
		dayNames: ['svētdiena','pirmdiena','otrdiena','trešdiena','ceturtdiena','piektdiena','sestdiena'],
		dayNamesShort: ['svt','prm','otr','tre','ctr','pkt','sst'],
		dayNamesMin: ['Sv','Pr','Ot','Tr','Ct','Pk','Ss'],
		dayStatus: 'DD', dateStatus: 'D, M d',
		dateFormat: 'dd-mm-yy', firstDay: 1,
		initStatus: '', isRTL: false,
		showMonthAfterYear: false, yearSuffix: ''};
	$.datepick.setDefaults($.datepick.regional['lv']);
})(jWPDev);
