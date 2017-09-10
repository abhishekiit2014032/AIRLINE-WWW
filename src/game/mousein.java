package game;

import game.dodo.state;

import java.awt.Color;
import java.awt.Graphics;
import java.awt.Rectangle;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;

public class mousein  implements MouseListener{
	
	 

 
	public void mouseClicked(MouseEvent e) {
		
		 
 
		int x=e.getX();
		int y=e.getY();
		
		if( x>350 && x<500)
		{
			if(y>200&&y<280)
			{
			dodo.st=dodo.state.games;
			}
		}
		
		if( x>350 && x<500)
		{
			if(y>400&&y<480)
			{
			System.exit(1);
			}
		}
			
		
	 
}
	public void mouseEntered(MouseEvent e) {
		/*int x=e.getX();
		int y=e.getY();
		
		if( x>350 && x<500)
		{
			if(y>200&&y<280)
			{
			 
			}
		}
		// TODO Auto-generated method stub*/
		
	}
	
	 
	@Override
	public void mouseExited(MouseEvent arg0) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void mousePressed(MouseEvent arg0) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void mouseReleased(MouseEvent arg0) {
		// TODO Auto-generated method stub
		
	}
	

}

