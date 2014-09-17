(function(){
	tinymce.PluginManager.add('sm_button', function(editor, url){
		editor.addButton('sm_button',{
			title : 'Add Buttons',
			icon : 'icon dashicons-schedule',
			type : 'menubutton',
			menu : [
			{		
				text : 'Alerts',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Alert Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'AlertText',
									label: 'Alert Text',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'listbox',
									name: 'Color',
									label: 'Color',
									'values': [
										{text: 'Red', value: 'Red'},
										{text: 'Green', value: 'Green'},
										{text: 'Purple', value: 'Purple'},
										{text: 'Blue', value: 'Blue'},
										{text: 'Yellow', value: 'Yellow'},
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[alert type= alerts color="' + e.data.Color + '"]' + e.data.AlertText + '[/alert]');
							}
						});
					}
			},
                        {	
				text : 'Blockquotes',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Blockquote Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Quote',
									label: 'Quote',
									value: 'Place your quotation here !',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'CitedBy',
									label: 'Cited By',
									value: 'Ahmad Awais'
								},
								{
									type: 'listbox',
									name: 'Position',
									label: 'Position',
									'values': [
										{text: 'Left', value: 'Left'},
										{text: 'Right', value: 'Right'},
										{text: 'Center', value: 'Center'}
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[blockquotes cite = "' + e.data.CitedBy + '" type="' + e.data.Position + '"]' + e.data.Quote + '[/blockquotes]');
							}
						});
					}
			},
                        {
                            text : 'Button',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Button Shortcode',
							body: [
								{
									type: 'listbox',
									name: 'ButtonType',
									label: 'Button Type',
									'values': [
										{text: 'Round', value: 'Round'},
										{text: 'Square', value: 'Sharp'},
									]
								},
								{
									type: 'listbox',
									name: 'Color',
									label: 'Color',
									'values': [
										{text: 'Red', value: 'Red'},
										{text: 'Green', value: 'Green'},
										{text: 'Purple', value: 'Purple'},
										{text: 'Blue', value: 'Blue'},
										{text: 'Yellow', value: 'Yellow'},
									]
								},
                                {
									type: 'textbox',
									name: 'url',
									label: 'Button url'
								},
								{
									type: 'textbox',
									name: 'ButtonText',
									label: 'Button Text',
									value: 'Click Me'
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[button type="' + e.data.ButtonType + '" color="' + e.data.Color + '" url="' + e.data.url + '"]' + e.data.ButtonText + '[/button]');
							}
						});
					}
			},
                        {	
				text : 'Code',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Code Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Code',
									label: 'Code',
									value: 'Plug in your code snippets here !',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[code]' + e.data.Code + '[/code]');
							}
						});
					}
			},
                        {	
				text : 'Columns',
				menu : [
				{
				text : 'Full Width',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Full Width Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'headingFul',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fullcontent',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type = "fullwidth" title = "' + e.data.headingFul + '"]' + e.data.fullcontent+'[/column]');
							}
						});
					}
				},	

				{
				text : 'One Half',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert One Half Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'onehalf1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'half1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'onehalf2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'half2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="one_half" title = "'+ e.data.onehalf1 +'"] '+ e.data.half1content + '[/column][column type="one_half" last="true" title = "' +e.data.onehalf2+'"]' +e.data.half2content+'[/column]');
							}
						});
					}
				},
				{
				text : 'One Third',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert One Third Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'onethird1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'third1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'onethird2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'third2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'onethird3',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'third3content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="one_third" title = "' + e.data.onethird1 +'"]' +e.data.third1content+' [/column][column type="one_third" title = "' + e.data.onethird2 +'"] '+e.data.third2content+' [/column][column type="one_third" last="true" title = "'+e.data.onethird3+'"]'+e.data.third3content+'[/column]');
							}
						});
					}
				},
				{
				text : 'One Fourth',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert One Fourth Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'onefourth1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fourth1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 70
								},
								{
									type: 'textbox',
									name: 'onefourth2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fourth2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 70
								},
								{
									type: 'textbox',
									name: 'onefourth3',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fourth3content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 70
								},
								{
									type: 'textbox',
									name: 'onefourth4',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fourth4content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 70
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="one_fourth" title = "' + e.data.onefourth1 +'"]' +e.data.fourth1content+' [/column][column type="one_fourth" title = "' + e.data.onefourth2 +'"] '+e.data.fourth2content+' [/column][column type="one_fourth" title = "' + e.data.onefourth3 +'"] '+e.data.fourth3content+' [/column][column type="one_fourth" last="true" title = "'+e.data.onefourth4+'"]'+e.data.fourth4content+'[/column]');
							}
						});
					}
				},
				
				{
				text : 'One Fifth',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert One Fifth Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'onefifth1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fifth1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 60
								},
								{
									type: 'textbox',
									name: 'onefifth2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fifth2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 60
								},
								{
									type: 'textbox',
									name: 'onefifth3',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fifth3content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 60
								},
								{
									type: 'textbox',
									name: 'onefifth4',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fifth4content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 60
								},
								{
									type: 'textbox',
									name: 'onefifth5',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fifth5content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 60
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="one_fifth" title = "' + e.data.onefifth1 +'"]' +e.data.fifth1content+' [/column][column type="one_fifth" title = "' + e.data.onefifth2 +'"] '+e.data.fifth2content+' [/column][column type="one_fifth" title = "' + e.data.onefifth3 +'"] '+e.data.fifth3content+' [/column][column type="one_fifth" title = "'+e.data.onefifth4+'"]'+e.data.fifth4content+'[/column][column type="one_fifth"  last="true" title = "' + e.data.onefifth5 +'"]' +e.data.fifth5content+' [/column]');
							}
						});
					}
				},
				{
				text : 'Two Thirds',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Two Thirds Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'twothird1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'twothird1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'twothird2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'twothird2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="two_third" title = "' + e.data.twothird1 +'"]' +e.data.twothird1content+' [/column][column type="one_third"  last="true" title = "' + e.data.twothird2 +'"]' +e.data.twothird2content+' [/column]');
							}
						});
					}
				},
				{
				text : 'Three Fourths',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Three Fourth Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'threefourth1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'threefourth1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'threefourth2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'threefourth2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="three_fourth" title = "' + e.data.threefourth1 +'"]' +e.data.threefourth1content+' [/column][column type="one_fourth"  last="true" title = "' + e.data.threefourth2 +'"]' +e.data.threefourth2content+' [/column]');
							}
						});
					}
				},

				{
				text : 'Two Fifths',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Two Fifths Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'twofifth1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'twofifth1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'twofifth2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'twofifth2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="two_fifth" title = "' + e.data.twofifth1 +'"]' +e.data.twofifth1content+' [/column][column type="three_fifth"  last="true" title = "' + e.data.twofifth2 +'"]' +e.data.twofifth2content+' [/column]');
							}
						});
					}
				},

				{
				text : 'Four Fifths',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Four Fifths Column Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'fourfifth1',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fourfifth1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'fourfifth2',
									value: 'Heading'
								},
								{
									type: 'textbox',
									name: 'fourfifth2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[column type="four_fifth" title = "' + e.data.fourfifth1 +'"]' +e.data.fourfifth1content+' [/column][column type="one_fifth"  last="true" title = "' + e.data.fourfifth2 +'"]' +e.data.fourfifth2content+' [/column]');
							}
						});
					}
				}/*
					{
						text : 'Four Fifths',
						value : "[column type='four_fifth' title = 'Heading'] Content goes here. [/column][column type='one_fifth' last='true' title = 'Heading'] Content goes here. [/column]",
						onclick : function(e){
						e.stopPropagation();
						editor.insertContent(this.value());
						}
					}*/
				
				]
			},
                        {	
				text : 'Custom Heading',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Custom Heading Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Heading',
									label: 'Heading Text',
									value: 'Custom Heading'
								},
								{
									type: 'listbox',
									name: 'Position',
									label: 'Position',
									'values': [
										{text: 'Left', value: 'left'},
										{text: 'Right', value: 'right'},
										{text: 'Center', value: 'center'}
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[heading align="' + e.data.Position + '"]' + e.data.Heading + '[/heading]');
							}
						});
					}
			},
                        {	
				text : 'DropCap',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert DropCap Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Letter',
									label: 'Text',
									value: 'Starting letter or Word'
								},
							
							],
							onsubmit: function( e ) {
								editor.insertContent( '[dropcap]' + e.data.Letter + '[/dropcap]');
							}
						});
					}
			},
                        {	
				text : 'Gap',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Gap Shortcode',
							body: [
								{
									type: 'listbox',
									name: 'Height',
									label: 'Height',
									'values': [
										{text: '50px', value: '50px'},
										{text: '100px', value: '100px'},
										{text: '150px', value: '150px'},
										{text: '200px', value: '200px'},
										{text: '250px', value: '250px'},
										{text: '300px', value: '300px'}
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[gap size="' + e.data.Height + '"]');
							}
						});
					}
			},
                        {	
				text : 'Highlight',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Highlight Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Highlight',
									label: 'Highlight Text',
									value: 'Highlight Text'
								},
								{
									type: 'listbox',
									name: 'Theme',
									label: 'Theme',
									'values': [
										{text: 'Light', value: 'light'},
										{text: 'Dark', value: 'dark'}
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[highlight theme="' + e.data.Theme + '"]' + e.data.Highlight + '[/highlight]');
							}
						});
					}
			},
                        {	
				text : 'Image',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Image Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Src',
									label: 'Image path',
								},
                                {
									type: 'textbox',
									name: 'width',
									label: 'Image Width',
                                    value: '100px'
								},
                                {
									type: 'textbox',
									name: 'height',
									label: 'Image height',
                                    value: '100px'
                                },
								{
									type: 'listbox',
									name: 'Type',
									label: 'Type',
									'values': [
										{text: 'Round', value: 'round'},
										{text: 'Circle', value: 'circle'},
										{text: 'Thumbnail', value: 'thumbnail'}
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[image type="' + e.data.Type + '" src = "' + e.data.Src + '" width = "' + e.data.width + '" height = "' + e.data.height + '"]');
							}
						});
					}
			},
                        {
				text : 'Line',
				value : "[line]",
				onclick : function()
				{
					editor.insertContent(this.value());
				}
			
			},
                        {	
				text : 'Map',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Map Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Map',
									label: 'Map Source Url'	
								},
							
							],
							onsubmit: function( e ) {
								editor.insertContent( '[map src="' + e.data.Map + '"]');
							}
						});
					}
			},
                        {	
				text : 'Private',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Private Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Private',
									label: 'For Logged in Users'	
								},
							
							],
							onsubmit: function( e ) {
								editor.insertContent( '[private id="private"]' + e.data.Private + ' [/private]');
							}
						});
					}
			},
                        {	
				text : 'Progress Bar',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Progress Bar Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Heading',
									label: 'Heading',
									value: 'Progress heading'
								},
								{
									type: 'textbox',
									name: 'Percentage',
									label: 'Percentage',
									value: '50%'
								},
								{
									type: 'textbox',
									name: 'BackgroundColor',
									label: 'Background Color',
									value: '#ff2a13'
								},
							],
							onsubmit: function( e ) {
								editor.insertContent( '[progress_bar heading = "' + e.data.Heading + '" percentage="' + e.data.Percentage + '" style="background-color:' + e.data.BackgroundColor + '"]');
							}
						});
					}
			},
                        {	
				text : 'Prompt',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Prompt Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'Title',
									label: 'Title',
									value: 'Prompt Title'
								},
								{
									type: 'textbox',
									name: 'Message',
									label: 'Message',
									value: 'Message goes here !',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								
								{
									type: 'listbox',
									name: 'Type',
									label: 'Type',
									'values': [
										{text: 'Left', value: 'Left'},
										{text: 'Right', value: 'Right'},
									]
								},
                                {
									type: 'textbox',
									name: 'url',
									label: 'Button Url'
								},
								{
									type: 'textbox',
									name: 'ButtonText',
									label: 'Button Text',
									value: 'Click Me !'
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[prompt title = "' + e.data.Title + '" message="' + e.data.Message + '" type = "' + e.data.Type + '" button_text = "' + e.data.ButtonText + '" url = "' + e.data.url + '"]');
							}
						});
					}
			},
                        {	
				text : 'Share',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Share Shortcode',
							body: [
								{
									type: 'checkbox',
									name: 'fbcheck',
									label: 'Enable Facebook'
								},
								{
									type: 'textbox',
									name: 'Facebook',
									label: 'Facebook url',
									value: 'http://www.facebook.com'
								},
								{
									type: 'checkbox',
									name: 'incheck',
									label: 'Enable Linkedin'
								},
								{
									type: 'textbox',
									name: 'Linkedin',
									label: 'Linkedin url',
									value: 'http://www.linkedin.com'
								},
								{
									type: 'checkbox',
									name: 'twittercheck',
									label: 'Enable Twitter'
								},
								{
									type: 'textbox',
									name: 'Twitter',
									label: 'Twitter url',
									value: 'http://www.twitter.com'
								}
							
							],
							onsubmit: function( e ) {
								editor.insertContent( '[share title="SHARE THIS POST" fbcheck="' + e.data.fbcheck +'" facebook="' + e.data.Facebook + '" twittercheck="' + e.data.twittercheck +'" twitter="' + e.data.Twitter + '" incheck="' + e.data.incheck +'" linkedin="' + e.data.Linkedin +'"]');
							}
						});
					}
                            },
                            {	
				text : 'Tabs',
				menu : [
					{	
				text : '2 Tabs',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert 2 Tab Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'tab1',
									value: 'Tab Heading'
								},
								{
									type: 'textbox',
									name: 'tab1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'tab2',
									value: 'Tab Heading'
								},
								{
									type: 'textbox',
									name: 'tab2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[tabs]<br />[tab title="' + e.data.tab1 + '"]' +e.data.tab1content +'[/tab]<br />[tab title="' + e.data.tab2 +'"]' + e.data.tab2content + '[/tab]<br/>[/tabs]');
							}
						});
					}
			},
			{
				text : '3 Tabs',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert 3 Tab Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'tab13',
									value: 'Tab Heading'
								},
								{
									type: 'textbox',
									name: 'tab13content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'tab23',
									value: 'Tab Heading'
								},
								{
									type: 'textbox',
									name: 'tab23content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'tab33',
									value: 'Tab Heading'
								},
								{
									type: 'textbox',
									name: 'tab33content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[tabs]<br />[tab title="' + e.data.tab13 + '"]' +e.data.tab13content +'[/tab]<br />[tab title="' + e.data.tab23 +'"]' + e.data.tab23content + '[/tab]<br/>[tab title="' + e.data.tab33 +'"]' + e.data.tab33content + '[/tab]<br/>[/tabs]');
							}
						});
					}
			}
				
			]
			},
			
			
			{	
				text : 'Toggle',
				menu : [
					{	
				text : '2 Toggle',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert 2 Toggle Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'toggle1',
									value: 'Toggle Heading'
								},
								{
									type: 'textbox',
									name: 'toggle1content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'toggle2',
									value: 'Toggle Heading'
								},
								{
									type: 'textbox',
									name: 'toggle2content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[toggles][toggle title="' + e.data.toggle1 + '"]' +e.data.toggle1content +'[/toggle][toggle title="' + e.data.toggle2 +'"]' + e.data.toggle2content + '[/toggle][/toggles]');
							}
						});
					}
			},
					{	
				text : '3 Toggle',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert 3 Toggle Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'toggle13',
									value: 'Toggle Heading'
								},
								{
									type: 'textbox',
									name: 'toggle13content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'toggle23',
									value: 'Toggle Heading'
								},
								{
									type: 'textbox',
									name: 'toggle23content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								},
								{
									type: 'textbox',
									name: 'toggle33',
									value: 'Toggle Heading'
								},
								{
									type: 'textbox',
									name: 'toggle33content',
									value: 'You can say a lot of stuff in here',
									multiline: true,
									minWidth: 300,
									minHeight: 100
								}
							],
							onsubmit: function( e ) {
								editor.insertContent('[toggles][toggle title="' + e.data.toggle13 + '"]' +e.data.toggle13content +'[/toggle][toggle title="' + e.data.toggle23 +'"]' + e.data.toggle23content + '[/toggle][toggle title="' + e.data.toggle33 +'"]' + e.data.toggle33content + '[/toggle][/toggles]');
							}
						});
					}
			}
				
				]
			},
                        {	
				text : 'Video',
				onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Video Shortcode',
							body: [
								{
									type: 'listbox',
									name: 'Type',
									label: 'Type',
									'values': [
										{text: 'Youtube', value: 'Youtube'},
										{text: 'Vimeo', value: 'Vimeo'}       
									]
								},
                                                                {
									type: 'textbox',
									name: 'id',
									label: 'Video ID'
								},
                                                                {
									type: 'textbox',
									name: 'width',
									label: 'Video Width',
                                                                        value: '500px' 
								},
                                                                {
									type: 'textbox',
									name: 'height',
									label: 'Video Height',
                                                                        value: '500px'
								}
								
							],
							onsubmit: function( e ) {
								editor.insertContent( '[video id = "' + e.data.id + '"  type = "' + e.data.Type + '" width = "' + e.data.width + '" height = "' + e.data.height + '"]');
							}
						});
					}
			}
		
			]
		});
	});
})();
