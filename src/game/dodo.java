package game;

import java.awt.*;
import java.awt.event.KeyEvent;
import java.awt.event.KeyListener;
import javax.swing.*;

public class dodo extends JPanel implements KeyListener {
	
	private int x=255,y=255;
	private player p;
	private stage s;
	private enemymanager em;
	private menu m;
	private End e;
	private mousein mi;
	private boolean isgmovr=false; 
	
	public static enum state{
		menu,
		games,end
		
	};
	 
	public static state st=state.menu;
	
	public dodo (){
	setSize(new Dimension(800,600));     
    setPreferredSize(new Dimension(800,600));
    this.setFocusable(true);
    addKeyListener(this); 
   this.addMouseListener(new mousein());
	p=new player(this,400,500);
	s=new stage();
	m=new menu();
	e=new End();
	mi=new mousein();
	em=new enemymanager(this,5);
	}
	 
	public stage getstage()
	{
		return s;
	}
	
	public void update(Graphics g)
	{
	  paint(g);  
	  
	}
	
	public state getstate()
	{
		return st;
	
	}
	public void paint(Graphics g)
	{
		if(st==state.games){
		g.setColor(Color.gray); 
		g.fillRect(0, 0, getWidth(), getHeight());
		s.draw(g);
		if(!isgmovr)
		{
			p.draw(g);
			em.draw(g);
			
		}
		 
		 
		g.dispose();
		}
		else if(st==state.menu)
		{
			m.draw(g);
		}
		
		else if(st==state.end)
		{
			e.draw(g);
		}
		g.dispose();
		
		repaint();
	}
	
	public void setgmovr(boolean f)
	{
		isgmovr=f;
	}
	
  public static void main(String args[]){
	dodo gm= new dodo();
	JFrame frame=new JFrame();
	frame.setTitle("game screen");
	frame.add(gm);
	frame.pack();
	frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	frame.setSize(new Dimension(800,600));
	frame.setLocationRelativeTo(null);
	frame.setResizable(false);
	frame.setVisible(true);
}

@Override
public void keyPressed(KeyEvent e) {
	 int c=e.getKeyCode();
	 
	 if(st==state.games){
		 
	 if(c==KeyEvent.VK_UP)
	 {
		 
	 }
	 if(c==KeyEvent.VK_DOWN)
		   
	 {
		 }
	  if(c==KeyEvent.VK_LEFT)
	 {
		 p.setxd(-1);
	 }
	 if(c==KeyEvent.VK_RIGHT)
	 {
		 p.setxd(+1);
	 }
	 }
}

@Override
    public void keyReleased(KeyEvent e){
	p.setxd(0);
	p.setyd(0);	
    }

@Override
public void keyTyped(KeyEvent e) {
	//TODO Auto-generated method stub 
	
}

public enemymanager getem()
{
	return em;
}


}
